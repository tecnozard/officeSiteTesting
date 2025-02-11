<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Internship;
use App\Mail\InternshipUserMail;
use App\Mail\InternshipAdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;



class InternshipController extends Controller
{
    /**
     * Display a listing of the internships.
     */
    public function index()
    {
        return response()->json(Internship::all(), 200);
    }

    /**
     * Store a newly created internship in storage.
     */
    public function store(Request $request)
    {
        $mailUsername = config('mail.mailers.smtp.username');
        $request->validate([
            'full_name' => 'required|string',
            'dob' => 'required|date_format:d-m-Y',
            'start_date' => 'required|date_format:d-m-Y',
            'gender' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'alt_phone' => 'nullable|string',
            'current_address' => 'required|string',
            'permanent_address' => 'nullable|string',
            'college' => 'required|string',
            'degree' => 'required|string',
            'year' => 'required|string',
            'graduation_year' => 'required|integer',
            'internship_type' => 'required|string',
            'experience' => 'required|string',
            'terms_agreement' => 'boolean',
            'payment_confirmation' => 'boolean',

            // File uploads (must be in multipart/form-data)
            'payment_proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'resume' => 'nullable|file|mimes:pdf,doc,png,docx|max:2048',
            'id_proof' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Extract form data (excluding files)
        $data = $request->except(['payment_proof', 'resume', 'id_proof']);

        // Handle file uploads
        if ($request->hasFile('payment_proof')) {
            $data['payment_proof'] = $request->file('payment_proof')->store('uploads/payment_proofs', 'public');
        }
        if ($request->hasFile('resume')) {
            $data['resume'] = $request->file('resume')->store('uploads/resumes', 'public');
        }
        if ($request->hasFile('id_proof')) {
            $data['id_proof'] = $request->file('id_proof')->store('uploads/id_proofs', 'public');
        }

        // Convert date formats
        $data['dob'] = Carbon::createFromFormat('d-m-Y', $data['dob'])->format('Y-m-d');
        $data['start_date'] = Carbon::createFromFormat('d-m-Y', $data['start_date'])->format('Y-m-d');

        // Save to database
        $internship = Internship::create($data);
        // Send email to admin
    Mail::to($mailUsername)->send(new InternshipAdminMail($internship));
        // Send email to user
    Mail::to($internship->email)->send(new InternshipUserMail($internship));




        return response()->json($internship, 201);
    }

    /**
     * Display the specified internship.
     */
    public function show($id)
    {
        $internship = Internship::find($id);
        if (!$internship) {
            return response()->json(['message' => 'Internship not found'], 404);
        }

        // Convert file paths to URLs
        $internship->payment_proof = $internship->payment_proof ? asset('storage/' . $internship->payment_proof) : null;
        $internship->resume = $internship->resume ? asset('storage/' . $internship->resume) : null;
        $internship->id_proof = $internship->id_proof ? asset('storage/' . $internship->id_proof) : null;

        return response()->json($internship, 200);
    }

    /**
     * Remove the specified internship.
     */
    public function destroy($id)
    {
        $internship = Internship::find($id);
        if (!$internship) {
            return response()->json(['message' => 'Internship not found'], 404);
        }

        // Delete files
        if ($internship->payment_proof) {
            Storage::delete('public/' . $internship->payment_proof);
        }

        if ($internship->resume) {
            Storage::delete('public/' . $internship->resume);
        }

        if ($internship->id_proof) {
            Storage::delete('public/' . $internship->id_proof);
        }

        $internship->delete();
        return response()->json(['message' => 'Internship deleted successfully'], 200);
    }
}

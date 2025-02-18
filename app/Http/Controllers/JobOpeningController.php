<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobOpening;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JobOpeningController extends Controller
{
    // Fetch all job postings
    public function index()
    {
        return response()->json(JobOpening::all(), 200);
        return view('careerspage', compact('jobs')); // Make sure 'jobs.blade.php' exists in 'resources/views'
    }

    // Store a new job posting
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Store image
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('jobs', 'public');
        }

        // Save to DB
        $job = JobOpening::create([
            'title' => $request->title,
            'category' => $request->category,
            'photo' => $path ?? null,
        ]);

        return response()->json(['message' => 'Job created successfully!', 'job' => $job], 201);
    }

    // Delete a job posting
    public function destroy($id)
    {
        $job = JobOpening::find($id);
        if (!$job) {
            return response()->json(['error' => 'Job not found'], 404);
        }

        // Delete the stored image
        Storage::disk('public')->delete($job->photo);

        $job->delete();
        return response()->json(['message' => 'Job deleted successfully!'], 200);
    }

}

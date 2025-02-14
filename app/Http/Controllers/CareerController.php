<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerApplicationUserMail;
use App\Mail\CareerApplicationAdminMail;
use App\Models\TypingTestResult;


class CareerController extends Controller
{

    public function index()
    {
        $careers = Career::all();
        return response()->json($careers, 200);
    }

    /**
     * Store a new career application with resume upload.
     */
    public function career(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'position' => 'required|string|max:255',
            'experience' => 'required|numeric|min:0',
            'resume' => 'required|file|mimes:pdf,png,doc,docx|max:2048'
        ]);

        try {
            // Upload Resume to public/uploads
            if ($request->hasFile('resume')) {
                $resumeFile = $request->file('resume');
                $newFileName = time() . '_' . uniqid() . '.' . $resumeFile->getClientOriginalExtension();
                $resumeFile->move(public_path('uploads'), $newFileName);
                $resumePath = 'uploads/' . $newFileName; // Save path in database
            } else {
                return response()->json(['error' => 'Resume upload failed'], 400);
            }

            // Create new career application
            $career = Career::create([
                'name' => $request->name,
                'email' => $request->email,
                'position' => $request->position,
                'experience' => $request->experience,
                'resume' => $resumePath
            ]);

            if (strtolower($career->position) === 'data entry') {
                // Generate Typing Test Link (expires in 48 hours)
                $testLink = URL::signedRoute('online.test', ['careerId' => $career->id], now()->addHours(48));

                Mail::to($career->email)->send(new CareerApplicationUserMail($career, $testLink));
            } else {
                // Send a regular email without the test link
                Mail::to($career->email)->send(new CareerApplicationUserMail($career));
            }


        // Send Email to Admin
        Mail::to('poovarasan@tecnozard.com')->send(new CareerApplicationAdminMail($career));

            return response()->json([
                'message' => 'Application submitted successfully',
                'data' => $career
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Retrieve a specific career application.
     */
    public function show($id)
    {
        $career = Career::find($id);
        if (!$career) {
            return response()->json(['error' => 'Application not found'], 404);
        }
        return response()->json($career, 200);
    }

    /**
     * Update a career application and resume file if needed.
     */
    public function update(Request $request, $id)
    {
        $career = Career::find($id);
        if (!$career) {
            return response()->json(['error' => 'Application not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255',
            'position' => 'sometimes|string|max:255',
            'experience' => 'sometimes|numeric|min:0',
            'resume' => 'sometimes|file|mimes:pdf,doc,docx|max:2048'
        ]);

        try {
            // Update resume if a new one is uploaded
            if ($request->hasFile('resume')) {
                // Delete old resume file
                if (File::exists(public_path($career->resume))) {
                    File::delete(public_path($career->resume));
                }

                // Store new resume
                $resumeFile = $request->file('resume');
                $newFileName = time() . '_' . uniqid() . '.' . $resumeFile->getClientOriginalExtension();
                $resumeFile->move(public_path('uploads'), $newFileName);
                $career->resume = 'uploads/' . $newFileName;
            }

            // Update other fields
            $career->update($request->except('resume'));

            return response()->json([
                'message' => 'Application updated successfully',
                'data' => $career
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Delete a career application and remove resume file.
     */
    public function destroy($id)
    {
        $career = Career::find($id);
        if (!$career) {
            return response()->json(['error' => 'Application not found'], 404);
        }

        // Delete resume file
        if (File::exists(public_path($career->resume))) {
            File::delete(public_path($career->resume));
        }

        $career->delete();

        return response()->json(['message' => 'Application deleted successfully'], 200);
    }
    public function showTest(Request $request, $careerId)
{
    // Ensure that the signed route is valid
    if (!$request->hasValidSignature()) {
        abort(403, 'Unauthorized access. This link has expired or is invalid.');
    }

    // Retrieve the career application
    $career = Career::find($careerId);
    if (!$career) {
        return abort(404, 'Application not found');
    }

    // Check if a test result exists for the given careerId
    $existingTest = TypingTestResult::where('career_id', $careerId)->exists();

    if ($existingTest) {
        return view('components.test.alreadytestcompleted', compact('career'));
    }

    // Show the typing test form
    return view('components.test.typingtest', compact('career'));
}


}

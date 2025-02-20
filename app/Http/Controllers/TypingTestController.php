<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\TypingTestResult;

class TypingTestController extends Controller
{
    public function showTypingTest($careerId)
    {
        $career = Career::findOrFail($careerId); // Fetch the career applicant by ID
        return view('typingtest', compact('career')); // Pass data to view
    }

    public function saveTypingTestResult(Request $request)
    {
        $request->validate([
            'career_id' => 'required|exists:careers,id',
            'words_typed' => 'required|integer',
            'accuracy' => 'required|integer',
            'is_selected' => 'required|boolean',
        ]);

        TypingTestResult::create([
            'career_id' => $request->career_id,
            'words_typed' => $request->words_typed,
            'accuracy' => $request->accuracy,
            'is_selected' => $request->is_selected,
        ]);

        return response()->json([
            'message' => 'Typing test saved successfully',
            'data' => $request->all()
        ]);
    }
 // Fetch all careers with their selection status
 public function getCareers()
 {
    $careers = Career::leftJoin('typing_test_results', 'careers.id', '=', 'typing_test_results.career_id')
        ->select('careers.*', 'typing_test_results.words_typed', 'typing_test_results.accuracy', 'typing_test_results.is_selected')
        ->get();

    return response()->json($careers);
}
}

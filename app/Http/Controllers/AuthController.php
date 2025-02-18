<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Contact;
use App\Models\Internship;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Hardcoded admin credentials
        $hardcodedEmail = 'ceo@tecnozard.com';
        $hardcodedPassword = 'g8X$1vJ9'; // Change for security

        if ($request->email === $hardcodedEmail && $request->password === $hardcodedPassword) {
            // Store session for admin
            session(['admin_logged_in' => true]);

            return redirect()->route('admindashboard'); // Redirect to admin dashboard
        }

        return redirect()->route('adminlogin')->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        // Destroy the session
        $request->session()->forget('admin_logged_in');

        return redirect()->route('adminlogin')->with('message', 'Logged out successfully');
    }

    public function dashboardCounts()
    {
        $careerCount = Career::count();
        $contactCount = Contact::count();
        $internshipCount = Internship::count();

        return response()->json([
            'career_count' => $careerCount,
            'contact_count' => $contactCount,
            'internship_count' => $internshipCount,
            'greeting' => $this->getGreetingMessage()
        ]);
    }

    private function getGreetingMessage()
    {
        $hour = Carbon::now()->timezone(config('app.timezone'))->hour;

        if ($hour >= 5 && $hour < 12) {
            return "Good Morning, Admin!";
        } elseif ($hour >= 12 && $hour < 18) {
            return "Good Afternoon, Admin!";
        } else {
            return "Good Evening, Admin!";
        }
    }
}

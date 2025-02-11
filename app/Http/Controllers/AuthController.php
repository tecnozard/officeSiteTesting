<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Hardcoded email and password
        $hardcodedEmail = 'admin@example.com';
        $hardcodedPassword = 'password123'; // Change this to a more secure password

        if ($request->email === $hardcodedEmail && $request->password === $hardcodedPassword) {
            // Generate a dummy token (since we're not using Laravel's authentication system)
            $token = base64_encode(random_bytes(32));

            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
                'admin' => [
                    'email' => $hardcodedEmail,
                ],
            ], 200);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}

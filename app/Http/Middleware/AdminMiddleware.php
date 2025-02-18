<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the admin is logged in
        if (!$request->session()->has('admin_logged_in')) {
            return redirect('/adminlogin')->with('error', 'Access Denied! Please log in.');
        }

        return $next($request);
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/service', function () {
    return view('components.services');
})->name('servicepage');

Route::get('/contact', function () {
    return view('components.contact');
})->name('contactpage');
Route::get('/teams', function () {
    return view('components.teams');
})->name('teamspage');
Route::get('/career', function () {
    return view('components.career');
})->name('careerpage');
Route::get('/terms', function () {
    return view('components.terms');
})->name('termspage');
Route::get('/privacy', function () {
    return view('components.privacy');
})->name('privacypage');
Route::get('/careerspage', function () {
    return view('components.careerspage');
})->name('careerspage');
Route::get('/internship', function () {
    return view('components.internship');
})->name('internshippage');
Route::get('/internshipdetails', function () {
    return view('components.internshipdetails');
})->name('internshipdetails');

Route::get('/adminlogin', function () {
    return view('components.admin.adminlogin');
})->name('adminlogin');
Route::get('/admindashbord', function () {
    return view('components.admin.admindashboard');
})->name('admindashboard');
Route::get('/webapplication', function () {
    return view('components.services.web_application');
})->name('webapplicationpage');
Route::get('/digital_marketing', function () {
    return view('components.services.digital_marketing');
})->name('digitalmarketing');
Route::get('/project', function () {
    return view('components.services.project');
})->name('project');
Route::get('/data-entry', function () {
    return view('components.services.data_entry');
})->name('data-entry');



Route::get('/online-test/{careerId}', [CareerController::class, 'showTest'])
    ->name('online.test')
    ->middleware('signed'); // Protects the route, allowing only valid signed URLs

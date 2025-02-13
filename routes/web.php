<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/contact', function () {
    return view('components.contact');
});
Route::get('/teams', function () {
    return view('components.teams');
});
Route::get('/career', function () {
    return view('components.career');
});
Route::get('/terms', function () {
    return view('components.terms');
});
Route::get('/privacy', function () {
    return view('components.privacy');
});
Route::get('/careerspage', function () {
    return view('components.careerspage');
});
Route::get('/internship', function () {
    return view('components.internship');
});
Route::get('/internshipdetails', function () {
    return view('components.internshipdetails');
});

Route::get('/adminlogin', function () {
    return view('components.admin.adminlogin');
});
Route::get('/admindashbord', function () {
    return view('components.admin.admindashboard');
});
Route::get('/web-application', function () {
    return view('components.services.web_application');
});
Route::get('/digital_marketing', function () {
    return view('components.services.digital_marketing');
});
Route::get('/project', function () {
    return view('components.services.project');
});
Route::get('/data-entry', function () {
    return view('components.services.data_entry');
});
Route::get('/non-services', function () {
    return view('components.services.non-services');
});


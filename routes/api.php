<?php
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/career/store', [CareerController::class, 'career']);


Route::prefix('internships')->group(function () {
    Route::get('/', [InternshipController::class, 'index']);
    Route::post('/create', [InternshipController::class, 'store']);
    Route::get('/{id}', [InternshipController::class, 'show']);
    Route::delete('/{id}', [InternshipController::class, 'destroy']);
});
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/contact', [ContactController::class, 'submitForm']);
use App\Http\Controllers\TypingTestController;

Route::post('/save-typing-test', [TypingTestController::class, 'saveTypingTestResult']);

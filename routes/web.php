<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[StudentController::class,'home'])->name('home');

Route::resource('student',StudentController::class);

Route::resource('teacher',TeacherController::class);

Route::resource('course',CourseController::class);

Route::resource('batch',BatchController::class);

Route::resource('enroll',EnrollmentController::class);

Route::resource('payment',PaymentController::class);
Route::get('/customer/invoice-download', [PaymentController::class,'showCustomerDownload'])->name('payment.print');
//Route::get('/payment/print/{id}',[PaymentController::class,'print'])->name('payment.print');

//Route::get('report/report1/{pid}',[ReportController::class,'report1']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

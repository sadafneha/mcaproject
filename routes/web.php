<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('innerpage', function () {
    return view('frontend.innerpage');
});

Route::get('privacy', function () {
    return view('frontend.privacypolicy');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('contact', function () {
    return view('contact');
});



Route::get('/change-password', [UserController::class, 'changePassword'])->middleware(['auth', 'verified'])->name('change-password');
Route::post('/change-password', [UserController::class, 'updatePassword'])->middleware(['auth', 'verified'])->name('update-password'); 
Route::resource('users', UserController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

// Route::get('contact-us', function (){
//     return view('frontend.contactform');
// });
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

Route::get('enquiries', [ContactController::class, 'show_all'])->middleware(['auth', 'verified']);
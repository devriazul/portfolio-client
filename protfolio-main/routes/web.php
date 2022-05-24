<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MySiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});


require __DIR__.'/auth.php';
Route::prefix('dashboard')->middleware(['auth','check_block','admin'])->group(function () {
    Route::get('/', function () {
        return view('layouts.app');
    })->name('dashboard');
    // UserController
    Route::resource('users', UserController::class);
    Route::get('users/{user}/change-role', [UserController::class, 'changeStatus'])->name('users.change_status');
    // AboutController
    Route::resource('about', AboutController::class);
    // ExperienceController
    Route::resource('experience', ExperienceController::class);
     // EducationController
     Route::resource('education', EducationController::class);
        // DescriptionController
        Route::resource('description', DescriptionController::class);
        // ContactController
        Route::resource('contact', ContactController::class);
        // MySitesController
        Route::resource('my-site', MySiteController::class);
        // ProfileController
        Route::resource('profile', ProfileController::class);
        Route::post('profile/{user}/change-password', [ProfileController::class, 'changePassword'])->name('profile.change_password');
        
    
});
    // HomeController
    Route::get('/', [HomeController::class, 'home']);
    Route::get('/about-page', [HomeController::class, 'about'])->name('about-page');
    Route::get('/education-page', [HomeController::class, 'education'])->name('education-page');
    Route::get('/my-sites-page', [HomeController::class, 'mySites'])->name('my-sites');
    Route::get('/contact-page', [HomeController::class, 'contact'])->name('contact');
    //ContactFormController
    Route::post('/contact-store', [ContactFormController::class, 'store'])->name('contact_form');

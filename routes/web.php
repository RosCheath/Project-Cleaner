<?php

use App\Http\Controllers\BecomeCleanerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageHeadsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CleanerController;
use App\Http\Controllers\userContactController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::group(['web'],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
    Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
    Route::get('view/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('v_profile');
    Route::resource('booking', BookingController::class);
    Route::get('invoice/{booking}', [App\Http\Controllers\BookingController::class, 'invoice'])->name('invoice');
    Route::post('/contacts', [userContactController::class, 'contacts'])->name('user.contacts');



});

Route::group(['web','middleware' => 'can:user-feature'],function(){

    Route::put('update/profile/', [App\Http\Controllers\ProfileController::class, 'update'])->name('update_profile');
    Route::get('edit/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit_profile');

});

Route::group(['web','middleware' => 'can:admin_auth'],function(){
    Route::resource('service', ServiceController::class);
    Route::resource('users', CreateUserController::class);
    Route::resource('admin-cleaner', App\Http\Controllers\CleanerController::class);
    Route::resource('image-head', ImageHeadsController::class);
    Route::resource('becom-cleaner', App\Http\Controllers\BecomeCleanerController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('contact-admin', ContactController::class);
});

Route::group(['web','middleware' => 'can:admin-feature'],function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'home_d'])->name('dashboard');
    Route::resource('pending', DashboardController::class);
    Route::get('/pending', [App\Http\Controllers\DashboardController::class, 'pending'])->name('pending');
    Route::get('/approved', [App\Http\Controllers\DashboardController::class, 'approved'])->name('approved');
    Route::get('/Booking/Service', [App\Http\Controllers\DashboardController::class, 'Booking_Service'])->name('booking_service');
    Route::get('/chart', [App\Http\Controllers\DashboardController::class, 'chart'])->name('chart');
    Route::get('/icon', [App\Http\Controllers\DashboardController::class, 'icon'])->name('icon');

    Route::get('/blank', [App\Http\Controllers\DashboardController::class, 'blank'])->name('blank');
    Route::get('/404', [App\Http\Controllers\DashboardController::class, 'p404'])->name('404');
    Route::get('/500', [App\Http\Controllers\DashboardController::class, 'p500'])->name('500');
    Route::get('/d-login', [App\Http\Controllers\DashboardController::class, 'login'])->name('d-login');
    Route::get('/d-register', [App\Http\Controllers\DashboardController::class, 'register'])->name('d-register');
});

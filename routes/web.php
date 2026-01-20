<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\LoginController;

Route::get('/', function() {
    return view('index');
});

Route::get('/events', [EventController::class, 'events'])->name('events');

Route::get('/featured', [FeaturedController::class, 'featured'])->name('featured');

Route::get('/browse', [BookController::class, 'browse'])->name('browse');
Route::get('/search', [BookController::class, 'search'])->name('search');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/addContact', [ContactController::class, 'addContact'])->name('addContact');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/empLogin', [LoginController::class, 'empLogin'])->name('empLogin');
Route::get('/login/employee', [BookController::class, 'employee'])->name('login.employee')->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('/createBook', [BookController::class, 'createBook'])->name('createBook')->middleware('auth');
Route::post('/bookUpdate', [BookController::class, 'bookUpdate'])->name('bookUpdate')->middleware('auth');

Route::delete('/contact-delete/{contact}', [ContactController::class, 'close'])->name('contact.close')->middleware('auth');

Route::post('/createEvent', [EventController::class, 'createEvent'])->name('createEvent')->middleware('auth');
Route::delete('/event-delete/{event}', [EventController::class, 'delete'])->name('event.delete')->middleware('auth');

Route::post('/createFeatured', [FeaturedController::class, 'createFeatured'])->name('createFeatured')->middleware('auth');
Route::delete('/featured-delete/{featured}', [FeaturedController::class, 'delete'])->name('featured.delete')->middleware('auth');

Route::post('/register', [LoginController::class, 'register'])->name('register')->middleware('auth');
Route::post('/resetPassword/{employee}', [LoginController::class, 'resetPassword'])->name('resetPassword')->middleware('auth');
Route::delete('/login-delete/{employee}', [LoginController::class, 'remove'])->name('login.remove')->middleware('auth');
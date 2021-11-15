<?php
use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
Route::get('/','GuestController@index');
Auth::routes();
// Route::get('/home','HomeController@index')->name('home'); Laravel 7
Route::get('/home', [HomeController::class, 'index']);
// Route::get('/entries/create', 'EntryController@create'); Laravel 7
Route::get('/entries/create',[EntryController::class, 'create']);
// Route::post('/entries', 'EntryController@store'); Laravel 7
Route::post('entries/create',[EntryController::class, 'store']);
Route::get('/entries/{entryBySlug}',[GuestController::class, 'show']);
Route::get('/entries/{entry}/edit',[EntryController::class, 'edit']);
Route::put('/entries/{entry}',[EntryController::class, 'update']);
Route::get('/@{user}',[UserController::class, 'show']);

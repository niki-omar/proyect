<?php

use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuestController;

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

Route::get('/','GuestController@index');

Auth::routes();
// Route::get('/home','HomeController@index')->name('home'); Laravel 7

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/entries/create', 'EntryController@create'); Laravel 7
Route::get('/entries/create', [EntryController::class, 'create']);
// Route::post('/entries', 'EntryController@store'); Laravel 7
Route::post('entries/create', [EntryController::class, 'store']);

Route::get('/entries/{entry}',  [GuestController::class, 'show']);

Route::get('/entries/{entry}/edit',  [EntryController::class, 'edit']);
Route::put('/entries/{entry}', [EntryController::class, 'update']);

Route::get('/users/{user}',  [UserController::class, 'show']);

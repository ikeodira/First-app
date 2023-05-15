<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/service', function () {
//     return view('pages.services');
// });


// Route::get('/users/{id}', function ($id) {
//     return 'This is a user '. $id;
// // });

// Route::get('/', 'PagesController@index');
// Route::get('/about', 'PagesController@about');
// Route::get('/s ervice', 'PagesController@service');

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/service', [App\Http\Controllers\PagesController::class, 'services']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/posts', PostsController::class);
Route::match(['put', 'patch'], '/posts?{id}',[App\Http\Controllers\PostsController::class, 'update']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

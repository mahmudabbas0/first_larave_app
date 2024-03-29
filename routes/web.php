<?php

use App\Http\Controllers\CoursController;
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

Route::get('/home', function () {
    return redirect()->route('courses.index');
});

Route::get('/', function () {
    return redirect()->route('courses.index');
});

Route::get('/about', function () {
    return  view('about');
});
Route::get('/contact', function () {
    return  view('contact');
});
Route::resource('/courses', CoursController::class);

Auth::routes();


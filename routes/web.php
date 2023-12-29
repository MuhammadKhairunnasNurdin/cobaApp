<?php

use App\Http\Controllers\PostController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home', [
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => "M.khairunnas",
        "email"=> "coba@gmail.com",
        "img" => "img/anas.jpg"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

Route::get("posts/{post}", [PostController::class, 'show']);




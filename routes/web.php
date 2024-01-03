<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

/*this called route model binding, we're using our slug to retrieve data with slug in binding or where slug = slug(from our get method) */
Route::get("posts/{post:slug}", [PostController::class, 'show']);
Route::get("/categories", function () {
   return view('categories', [
       'title' => "Post Categories",
       'categories' => Category::all()
   ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

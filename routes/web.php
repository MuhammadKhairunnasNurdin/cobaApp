<?php

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


Route::get('/blog', function () {
    $blogPost = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "M.khairunnas",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloremque ea eum exercitationem expedita fuga fugit harum iusto, laborum mollitia odio sequi sint suscipit tempora voluptatibus. Dolorem nam provident quod voluptas. Accusamus accusantium ad adipisci, at consequatur corporis cupiditate, esse fuga fugit illo illum incidunt iusto magnam maiores maxime nihil nulla officiis pariatur porro provident quos repudiandae sed similique totam voluptas. Beatae dicta, dolorem ea error hic laborum molestiae non porro voluptate voluptatibus. Deleniti, eum mollitia neque repellat similique ut!"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Nurdin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur ea eum nulla odio quod. A aspernatur consectetur corporis, deserunt dolore eligendi eos error eum expedita facilis fugit impedit molestiae natus nobis omnis perspiciatis placeat, possimus, quae quasi quisquam ratione sapiente sed voluptas voluptatem voluptates? Accusantium amet, aperiam autem, debitis delectus dicta dignissimos ducimus est, in libero magni molestias mollitia quam quasi rem rerum sint temporibus. Accusantium aliquid animi at atque commodi cumque dignissimos dolor doloribus eius ex, illo in ipsa magni minima, nam nesciunt nihil omnis provident, quas reiciendis repudiandae sequi tempore ullam ut vero! Consequatur distinctio inventore repellendus."
        ],

    ];
    return view('posts', [
        "title" => 'Posts',
        "posts" =>  $blogPost
    ]);
});

Route::get("posts/{slug}", function ($slug) {
    $blogPost = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "M.khairunnas",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloremque ea eum exercitationem expedita fuga fugit harum iusto, laborum mollitia odio sequi sint suscipit tempora voluptatibus. Dolorem nam provident quod voluptas. Accusamus accusantium ad adipisci, at consequatur corporis cupiditate, esse fuga fugit illo illum incidunt iusto magnam maiores maxime nihil nulla officiis pariatur porro provident quos repudiandae sed similique totam voluptas. Beatae dicta, dolorem ea error hic laborum molestiae non porro voluptate voluptatibus. Deleniti, eum mollitia neque repellat similique ut!"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Nurdin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur ea eum nulla odio quod. A aspernatur consectetur corporis, deserunt dolore eligendi eos error eum expedita facilis fugit impedit molestiae natus nobis omnis perspiciatis placeat, possimus, quae quasi quisquam ratione sapiente sed voluptas voluptatem voluptates? Accusantium amet, aperiam autem, debitis delectus dicta dignissimos ducimus est, in libero magni molestias mollitia quam quasi rem rerum sint temporibus. Accusantium aliquid animi at atque commodi cumque dignissimos dolor doloribus eius ex, illo in ipsa magni minima, nam nesciunt nihil omnis provident, quas reiciendis repudiandae sequi tempore ullam ut vero! Consequatur distinctio inventore repellendus."
        ],

    ];

    $single = [];
    foreach ($blogPost as $post) {
        if ($post['slug'] === $slug) {
            $single = $post;
        }
    }

    return view('post', [
        'title' => "Single Post",
        "post" => $single
    ]);
});




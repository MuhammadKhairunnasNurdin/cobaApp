<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostManual
{
    private static $blogPost = [
        [
            "title" => "First PostManual",
            "slug" => "first-post",
            "author" => "M.khairunnas",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta doloremque ea eum exercitationem expedita fuga fugit harum iusto, laborum mollitia odio sequi sint suscipit tempora voluptatibus. Dolorem nam provident quod voluptas. Accusamus accusantium ad adipisci, at consequatur corporis cupiditate, esse fuga fugit illo illum incidunt iusto magnam maiores maxime nihil nulla officiis pariatur porro provident quos repudiandae sed similique totam voluptas. Beatae dicta, dolorem ea error hic laborum molestiae non porro voluptate voluptatibus. Deleniti, eum mollitia neque repellat similique ut!"
        ],
        [
            "title" => "Second PostManual",
            "slug" => "second-post",
            "author" => "Nurdin",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequatur ea eum nulla odio quod. A aspernatur consectetur corporis, deserunt dolore eligendi eos error eum expedita facilis fugit impedit molestiae natus nobis omnis perspiciatis placeat, possimus, quae quasi quisquam ratione sapiente sed voluptas voluptatem voluptates? Accusantium amet, aperiam autem, debitis delectus dicta dignissimos ducimus est, in libero magni molestias mollitia quam quasi rem rerum sint temporibus. Accusantium aliquid animi at atque commodi cumque dignissimos dolor doloribus eius ex, illo in ipsa magni minima, nam nesciunt nihil omnis provident, quas reiciendis repudiandae sequi tempore ullam ut vero! Consequatur distinctio inventore repellendus."
        ],

    ];

    public static function all()
    {
        return collect(self::$blogPost);
    }

    public static function find($slug)
    {
        $posts = self::all();
        /*use collect function Laravel to replace this logic*/
        /*$post = [];
        foreach ($posts as $p) {
            if ($p['slug'] === $slug) {
                 $post = $p;
            }
        }*/
        return $posts->firstWhere('slug', $slug);
    }
}

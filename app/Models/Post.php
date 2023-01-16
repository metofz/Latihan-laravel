<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title"  => "Judul Tulisan Pertama",
            "slug"   => "judul-post-pertama",
            "author" => "Reza Fazriansyah",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus nostrum, optio, voluptatum est saepe asperiores accusantium pariatur tempore aspernatur natus reprehenderit. Sunt, adipisci quisquam maxime cumque alias at aliquam, unde fuga aut dicta optio autem eius excepturi libero repellat, perspiciatis obcaecati. Facere amet magnam excepturi veritatis! Libero fugiat rem voluptatibus debitis non minus sapiente perferendis necessitatibus cupiditate, ullam aliquam suscipit in optio iure, repudiandae expedita, modi odio quidem mollitia consequatur sint. Error quam fugiat, totam veritatis labore asperiores impedit?"
        ],
        [
            "title"  => "Judul Tulisan Kedua",
            "slug"   => "judul-post-kedua",
            "author" => "Aprillia Alifa",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum necessitatibus nostrum, optio, voluptatum est saepe asperiores accusantium pariatur tempore aspernatur natus reprehenderit. Sunt, adipisci quisquam maxime cumque alias at aliquam, unde fuga aut dicta optio autem eius excepturi libero repellat, perspiciatis obcaecati. Facere amet magnam excepturi veritatis! Libero fugiat rem voluptatibus debitis non minus sapiente perferendis necessitatibus cupiditate, ullam aliquam suscipit in optio iure, repudiandae expedita, modi odio quidem mollitia consequatur sint. Error quam fugiat, totam veritatis labore asperiores impedit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iusto cumque asperiores ea provident quidem et praesentium quisquam laborum voluptatibus!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hamzah Hadi Permana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta totam, doloribus, beatae dolor quaerat, tenetur itaque dolorem voluptates id fugit adipisci in! Tenetur magnam omnis libero error delectus, voluptatibus cumque reprehenderit aut reiciendis alias rerum quasi officia totam cum sed sit quo maiores adipisci culpa corrupti blanditiis ut veritatis nulla! Dicta non cupiditate maxime provident omnis. Corrupti iure, magni possimus voluptates repellendus hic placeat odio perspiciatis adipisci mollitia est accusantium a nihil dolores magnam assumenda porro? Quos, dolor inventore?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "MR Crab",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quod sunt officiis nesciunt. Repudiandae officia inventore odit sed eveniet! Corrupti officia ad velit dolor nesciunt mollitia reiciendis harum vero cupiditate!"
        ]
    
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $post->firstWhere('slug', $slug);
    }
}

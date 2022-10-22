<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hamzah Hadi Permana",
        "email" => "203040087@mail.unpas.ac.id",
        "image" => "hamzah.jpg"
    ]);   
});


Route::get('/blog', function () {
    $blog_posts = [
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
        ],
    
    ];
    
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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
        ],
    
    ];

    $new_post =[];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

     return view('post',[
        "title" => "Single Post",
        "post" => $new_post
     ]);
});

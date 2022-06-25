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
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Jun Hay",
        "email" => "tanjunhay@gmail.com",
        "image" => "gbr.png"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jun Hay",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus itaque saepe natus quia eum dolorem cupiditate numquam, incidunt sint voluptatem voluptatum obcaecati veniam ullam fuga, praesentium reiciendis! Hic eius earum, similique magnam amet id quis beatae laborum maiores eveniet nesciunt soluta minus dicta, facere alias incidunt saepe commodi fugiat. Expedita reprehenderit quis cumque dolores suscipit tempora fugiat ratione non facere quod laudantium cupiditate, earum assumenda repudiandae natus voluptatem sit accusamus, rem, rerum molestiae dolor! Cumque aliquam obcaecati hic quidem praesentium?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Martina",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit unde soluta tempore expedita voluptatibus quae, necessitatibus aliquam placeat dicta a animi amet quibusdam impedit illo consequatur, veritatis veniam ad odio aut. Nemo, veniam ut. Delectus quo sequi deserunt accusantium ullam, odio, adipisci, molestiae aliquam earum illum similique assumenda inventore consequatur! Ut, perferendis sint. At possimus est, maxime quo ratione aut in harum qui magni fugit provident voluptatum officia dolor tenetur quis, rem recusandae veniam ad? A accusamus aliquid soluta rerum, nisi at saepe omnis fugit recusandae natus, modi vel accusantium ex! Quos eligendi nulla reprehenderit voluptatum, laboriosam ipsam ipsa amet?"
        ]
    ];
    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single posts
Route::get('posts/{slug}', function ($slug) {
    return view('post',[
        "title" => "Single Post"
    ]);
});

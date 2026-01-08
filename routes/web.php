<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Naufal Bintang', "title" => "About"]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Blog",
        "posts" => [
            [
                "id" => 1,
                "slug" => "judul-artikel-1",
                "title" => "Judul Artikel 1",
                "author" => "Naufal Bintang",
                "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti officiis error sequi beatae, suscipit
                perspiciatis hic necessitatibus omnis molestiae voluptatibus exercitationem repellendus sit earum est
                doloribus? Laboriosam nam repellat aut?"
            ],
            [
                "id" => 2,
                "title" => "Judul Artikel 2",
                "slug" => "judul-artikel-2",
                "author" => "Naufal Bintang",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem doloremque fuga reiciendis repellendus eaque.
                Quo, consectetur modi excepturi suscipit exercitationem quibusdam vitae neque aliquid nihil pariatur quas,
                esse, corrupti beatae."
            ]
        ],
    ]);
});

Route::get("/posts/{slug}", function ($slug) {
    $posts = [
        [
            "id" => 1,
            "slug" => "judul-artikel-1",
            "title" => "Judul Artikel 1",
            "author" => "Naufal Bintang",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti officiis error sequi beatae, suscipit
                perspiciatis hic necessitatibus omnis molestiae voluptatibus exercitationem repellendus sit earum est
                doloribus? Laboriosam nam repellat aut?"
        ],
        [
            "id" => 2,
            "slug" => "judul-artikel-2",
            "title" => "Judul Artikel 2",
            "author" => "Naufal Bintang",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem doloremque fuga reiciendis repellendus eaque.
                Quo, consectetur modi excepturi suscipit exercitationem quibusdam vitae neque aliquid nihil pariatur quas,
                esse, corrupti beatae."
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

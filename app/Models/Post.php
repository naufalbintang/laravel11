<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
        ];
    }

    public static function find($slug): array
    {

        $post = Arr::first(static::all(), fn($post) => $post["slug"] == $slug);

        if (!$post) {
            abort(404);
        }
        return $post;
    }
}

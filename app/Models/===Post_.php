<?php

namespace App\Models; 

class Post
{
    private static $blog_posts =  [[
        "title" => "Apel",
        "slug" => "judul-artikel-1",
        "author" => "Raihan Nandito",
        "body" => "Apel adalah buah yang berasal dari pohon apel (Malus domestica) dan termasuk dalam keluarga Rosaceae. Buah ini dikenal luas di seluruh dunia dan tersedia dalam berbagai varietas dengan warna, ukuran, dan rasa yang bervariasi, mulai dari manis hingga asam."
     ], 
     [
        "title" => "Pisang",
        "slug" => "judul-artikel-2",
        "author" => "Ismanto Harahap",
        "body" => "Pisang adalah buah yang berasal dari tanaman herba besar dari genus Musa. Buah ini dikenal luas di seluruh dunia dan populer karena rasanya yang manis, teksturnya yang lembut, serta kandungan nutrisinya yang tinggi."
     ]
     ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
       return $posts->firstWhere('slug', $slug);
    }
}

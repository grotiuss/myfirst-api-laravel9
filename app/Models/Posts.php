<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Posts extends Model
{
    // use HasFactory;
    private static $dummy_posts = [
        [
            "title" => "First Note",
            "slug" => "first-note",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ducimus ad iure, voluptate facere, excepturi architecto, maiores quibusdam cupiditate debitis nulla? Expedita similique officia quis voluptas velit sapiente necessitatibus non. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quis a sed nobis exercitationem consequuntur. 
            Inventore rem quam ipsa, doloribus esse distinctio autem iusto ipsum dolor quis nisi officia id."
        ],
        [
            "title" => "Second Note",
            "slug" => "second-note",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime accusantium fugit aliquid, porro quidem mollitia accusamus assumenda perferendis, necessitatibus ex aperiam doloremque, neque autem delectus nobis eius veritatis? Iste, amet."
        ]
    ];

    public static function select($slug = NULL) {
        $posts = self::$dummy_posts;
        if($slug) {
            foreach($posts as $post) {
                if($post['slug'] === $slug) {
                    return $post;
                }
            }
            return false;
        }
        return self::$dummy_posts;
    }
}

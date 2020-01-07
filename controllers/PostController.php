<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Post;


class PostController
{
    public static function ListAction()
    {
        // Liste des publications
        $posts = [];

        $post = new Post();
        $post->title = "Post 1 ";
        $post->content = "Contenu 1";
        $posts[] = $post;

        $post = new Post();
        $post->title = "Post 2 ";
        $post->content = "Contenu 2";
        $posts[] = $post;


        $items = Post::gatAll();
        var_dump($items);

        
 

        View::setTemplate("post_list");
        View::bindVariable("posts", $posts);
        View::display();
    }

    
}
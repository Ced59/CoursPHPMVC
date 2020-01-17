<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Post;


class PostController
{
    public static function ListAction()
    {
        // Route : /
        // Route : /posts
        // Liste des publications
        $posts = [];
        $posts = Post::getAll();



    
        
        View::setTemplate("post_list");
        View::bindVariable("posts", $posts);
        View::bindVariable("title", "Mon site");
        View::display();
    }

    public static function PostAction($title, $text)
    {

        // Route: /post/insert

        Post::insertPost($title, $text);
    }

}
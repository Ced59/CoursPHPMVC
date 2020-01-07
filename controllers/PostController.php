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
        $posts = Post::getAll();
        
        View::setTemplate("post_list");
        View::bindVariable("posts", $posts);
        View::bindVariable("title", "Mon site");
        View::display();
    }

}
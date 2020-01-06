<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Post;
use Valarep\objects\Dao;

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

        
        $pdo = Dao::open();
        var_dump($pdo);
        $pdo = Dao::close();

        View::setTemplate("post_list");
        View::bindVariable("posts", $posts);
        View::display();
    }

    
}
<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Post;
use Valarep\Route;
use Valarep\Router;


class PostController
{

    public static function route()
    {
        $router = new Router();
        $router->addRoute(new Route("/", "PostController", "ListAction"));
        $router->addRoute(new Route("/posts", "PostController", "ListAction"));
        $router->addRoute(new Route("/post/insert", "PostController", "PostAction"));

        $route = $router->findRoute();

        if ($route) {
            $route->execute();
        } else {
            // Erreur 404

            echo "Page Not Found";
        }
    }

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

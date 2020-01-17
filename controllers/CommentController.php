<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Comment;
use Valarep\Route;
use Valarep\Router;
use Exception;


class CommentController
{

    public static function route()
    {
        $router = new Router();
        $router->addRoute(new Route("/comment/insert/{id_post}", "CommentController", "CommentAction"));

        $route = $router->findRoute();

        if ($route) {
            $route->execute();
        } else {
            // Erreur 404

            echo "Page Not Found";
        }
    }

    public static function CommentAction($id_post)
    {
        // Sécurisation du paramètre
        $id_post = filter_var($id_post, FILTER_VALIDATE_INT);

        if (empty($id_post)) 
        {
            //ERREUR
            echo "Oups Pas touche à ca boubourse!!";

        } 
        else 
        {
            $text = filter_input(INPUT_POST, "comment", FILTER_SANITIZE_STRING);

            try
            {
                Comment::insertComment($id_post, $text);
            }
            catch (Exception $e)
            {
                echo "Oups faut pas toucher!";
                die();
            }
            

            $router = new Router();
            $path = $router->getBasePath();
            header("location: {$path}/");
        }
    }
}

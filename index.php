<?php

namespace Valarep;

// inclusion des classes externes
use Valarep\controllers\PostController;
use Valarep\controllers\CommentController;

// début de l'application web

// Chargement automatique des classes
require_once "vendor/autoload.php";



$router = new Router();
$router->addRoute(new Route("/", "PostController"));
$router->addRoute(new Route("/posts", "PostController"));
$router->addRoute(new Route("/post/{*}", "PostController"));

$route = $router->findRoute();

if ($route)
{
    $route->execute();
}
else
{
    // Erreur 404

    echo "Page Not Found";
}
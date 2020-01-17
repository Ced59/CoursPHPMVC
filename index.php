<?php

namespace Valarep;

// inclusion des classes externes
use Valarep\controllers\PostController;
use Valarep\controllers\CommentController;

// début de l'application web

// Chargement automatique des classes
require_once "vendor/autoload.php";




// récupération de la variable transmise par GET
// est ce qu'on a cliqué sur le navbar ?
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // page par défaut
    $page = 'post-list';
}

switch ($page) {
    case 'post-list':
        // routage ver PageController
            PostController::ListAction();    
        break;

        case 'post-insert':
            PostController::PostAction($_POST['title'], $_POST['text']);
            PostController::ListAction();
        break;

        case 'comment-insert':
            CommentController::CommentAction($_GET['idPost'], $_POST['comment']);
            PostController::ListAction();
    default:
        //todo: ERREUR 404
        break;
}

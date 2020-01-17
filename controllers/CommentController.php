<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Comment;


class CommentController
{


    public static function CommentAction($id_post, $text)
    {
        Comment::insertComment($id_post, $text);
    }

}
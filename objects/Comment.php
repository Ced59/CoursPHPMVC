<?php
namespace Valarep\objects;


use Valarep\dao\CommentDao;

class Comment
{
    public $id;
    public $datetime;
    public $content;
    



    public static function insertComment($id_post, $text)
    {
        CommentDao::insertComment($id_post, $text);
    }
}
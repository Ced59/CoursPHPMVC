<?php
namespace Valarep\objects;


use Valarep\dao\PostDao;
use Valarep\dao\CommentDao;

class Post
{
    public $id;
    public $title;
    public $content;
    public $comments;



    public static function getAll()
    {
        return PostDao::getAll();
    }

    public static function insertPost($title, $text)
    {
        PostDao::insertPost($title, $text);
    }

    public function getComments()
    {
        if ($this->comments == null)
        {
            $this->comments = CommentDao::getComments($this->id);
        }

        return $this->comments;
    }
}
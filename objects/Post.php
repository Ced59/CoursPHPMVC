<?php
namespace Valarep\objects;


use Valarep\dao\PostDao;

class Post
{
    public $title;
    public $content;

    public static function gatAll()
    {
        return PostDao::getAll();
    }
}
<?php
namespace Valarep\objects;


use Valarep\dao\PostDao;

class Post
{
    private $id;
    public $title;
    public $content;



    public static function getAll()
    {
        return PostDao::getAll();
    }
}
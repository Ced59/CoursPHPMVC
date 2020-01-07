<?php

namespace Valarep\dao;

use \PDO;

class PostDao
{
    public static function getAll()
    {
        $dbh = Dao::open(); //Database Handler
        
        $query = "SELECT * FROM `post`;";
        $sth = $dbh->prepare($query); // PDOStatment
        $sth->execute();
        $sth->setFetchMode(
            PDO::FETCH_CLASS, //On veut des objets
            "Valarep\\objects\\Post" //La classe Post complétement qualifiée
        );
        $items = $sth->fetchAll();

        Dao::close();

        return $items;
    }


    public static function insertPost($title, $text)
    {
        $dbh = Dao::open();

        $query = "INSERT INTO `post` (title, content) VALUES (:title, :text);";

        $sth = $dbh->prepare($query); // PDOStatment
        $sth->bindParam(":title", $title);
        $sth->bindParam(":text", $text);
        $nbrows = $sth->execute();

        if ($nbrows != 1)
        {
            echo "oups...";
            var_dump($query);
            die();
        }

        Dao::close();
    }
}
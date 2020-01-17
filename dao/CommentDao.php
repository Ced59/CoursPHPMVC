<?php

namespace Valarep\dao;

use \PDO;

class CommentDao
{
    public static function getComments($id_post)
    {
        $dbh = Dao::open(); //Database Handler
        
        $query = "SELECT * FROM `comment` WHERE `id_post` = :id_post ORDER BY `id` DESC;";
        $sth = $dbh->prepare($query); // PDOStatment
        $sth->bindParam("id_post", $id_post);
        $sth->execute();
        $sth->setFetchMode(
            PDO::FETCH_CLASS, //On veut des objets
            "Valarep\\objects\\Comment" //La classe Comment complétement qualifiée
        );
        $items = $sth->fetchAll();

        Dao::close();

        return $items;
    }


    public static function insertComment($id_post, $text)
    {
        $dbh = Dao::open();

        $query = "INSERT INTO `comment` (content, id_post) VALUES (:content, :id_post);";

        $sth = $dbh->prepare($query); // PDOStatment
        $sth->bindParam(":content", $text);
        $sth->bindParam(":id_post", $id_post);
        $nbrows = $sth->execute();

        if ($nbrows != 1)
        {
            echo "oups...";
            var_dump($query);
            echo $sth->errorInfo()[2];
            die();
        }

        Dao::close();
    }
}
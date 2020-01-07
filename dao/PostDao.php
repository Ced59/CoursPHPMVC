<?php

namespace Valarep\dao;

class PostDao
{
    public static function getAll()
    {
        $dbh = Dao::open(); //Database Handler
        
        $query = "SELECT * FROM `post`;";
        $sth = $dbh->prepare($query); // PDOStatment
        $sth->execute();
        $items = $sth->fetchAll();

        Dao::close();

        return $items;
    }
}
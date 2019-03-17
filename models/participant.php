<?php

require_once __DIR__ . "/../database.php";

class Participant
{
    private $id;
    private $name;
    private $email;

    /**
     * function fetches participant by id
     */
    public static function find($id)
    {
        $connection = Database::getConnection();
        $statement  = $connection->prepare("SELECT * FROM participants WHERE id = ?");
        $statement->execute([$id]);
        var_dump($statement->fetch());
    }

    public static function find($name) 
    {
        $connection = Database::getConnection();
        $statement = $connection->prepare("SELECT * FROM participants WHERE name = ?");
        $statement->execute([$name]);
        var_dump($statement->fetch());
    }

    public static function find($email)
    {
        $connection = Database::getConnection();
        $statement = $connection->prepare("SELECT * FROM participants WHERE email = ?");    
        $statement->execute([$email]);
        var_dump($statement->fetch());
    }
}



Participant::find(1);
Participant::find("jenny");
Participant::find("jenthakkar@gmail.com");
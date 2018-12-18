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
}
Participant::find(1);

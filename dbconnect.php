<?php

class DB
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=hacker", "root", "");
    }
    public function insert($name, $email, $comment)
    {
        $stmt = $this->db->prepare("INSERT INTO comment (name,email,comment) VALUES (:name,:email,:comment)");
        $result = $stmt->execute([
            "name" => $name,
            "email" => $email,
            "comment" => $comment
        ]);
        return $result;
    }
    public function getAllComment()
    {
        $stmt = $this->db->prepare("SELECT * FROM comment");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}

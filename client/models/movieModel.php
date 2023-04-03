<?php
class MovieModel
{
    private $db;

    function __construct($dsn, $username, $password)
    {
        $this->db = new PDO($dsn, $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function find($movieId)
    {
        $stmt = $this->db->prepare("SELECT * FROM movie WHERE movieId = :movieId");
        $stmt->bindParam(":movieId", $movieId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function search()
    {
       
    }

    function getMoive()
    {
        $stmt = $this->db->prepare("select * from movie join types on typeId = id");
        $stmt->execute();
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $movies;
    }

    function getDetailsMovies($movieId)
    {
        $stmt = $this->db->prepare("SELECT * from movie join types on typeId = id where movieId = :movieId");
        $stmt->bindParam(":movieId", $movieId);
        $stmt->execute();
        $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $movies;
    }

    function getTypes()
    {
        $stmt = $this->db->prepare("select * from types");
        $stmt->execute();
        $types = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $types;
    }
}

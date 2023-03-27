<?php
class MovieModel
{
    private $db;

    function __construct($dsn, $username, $password)
    {
        $this->db = new PDO($dsn, $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function add($movieName, $typeId, $poster, $link, $time, $desc)
    {
        $stmt = $this->db->prepare("INSERT INTO movie (movieName, typeId,poster,link, time, description) VALUES (:movieName, :typeId, :poster, :link, :time, :desc)");
        $stmt->execute(array(
            ':movieName' => $movieName,
            ':typeId' => $typeId,
            'poster' => $poster,
            'link' => $link,
            'time' => $time,
            'desc' => $desc
        ));
    }

    function delete($movieId)
    {
        $stmt = $this->db->prepare("DELETE FROM movie WHERE movieId = :movieId");
        $stmt->execute(array(
            ":movieId" => $movieId
        ));
    }

    function update($movieName, $typeId, $poster, $link, $time, $desc, $movieId)
    {
        $stmt = $this->db->prepare("UPDATE movie SET movieName=:movieName, typeId=:typeId, poster=:poster, link=:link, time=:time,description=:desc WHERE movieId =:movieId");
        $stmt->execute(array(
            ':movieName' => $movieName,
            ':typeId' => $typeId,
            'poster' => $poster,
            'link' => $link,
            'time' => $time,
            'desc' => $desc,
            'movieId' => $movieId
        ));
    }

    function addType($type)
    {
        $stmt = $this->db->prepare("INSERT INTO types (type) VALUES (:type)");
        $stmt->execute(array(
            ':type' => $type
        ));
    }

    function find($movieId)
    {
        $stmt = $this->db->prepare("SELECT * FROM movie WHERE movieId = :movieId");
        $stmt->bindParam(":movieId", $movieId);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function getMoive()
    {
        $stmt = $this->db->prepare("select * from movie join types on typeId = id");
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

    function listUser()
    {
        $stmt = $this->db->prepare("select * from user");
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }
}

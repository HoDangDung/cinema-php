<?php
class AcountModel
{
    private $db;

    function __construct($dsn, $username, $password)
    {
        $this->db = new PDO($dsn, $username, $password);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function register($name, $email, $pass)
    {
        $stmt = $this->db->prepare('INSERT INTO user (userName, email, password) values (:name, :email, :pass)');
        $stmt->execute(array(
            ':name' => $name,
            ':email' => $email,
            ':pass' => $pass
        ));
    }

    function find($email)
    {
        $stmt = $this->db->prepare('SELECT * from user where email=:email');
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    function findUser($userId)
    {
        $stmt = $this->db->prepare('SELECT * from user where userId =:userId');
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    function changeinfo($name, $email, $userId)
    {
        $stmt = $this->db->prepare('UPDATE user SET userName = :name, email = :email where userId =:userId');
        $stmt->execute(array(
            ':name' => $name,
            ':email' => $email,
            ':userId' => $userId
        ));
    }
    function changepass($passnew, $userId)
    {
        $stmt = $this->db->prepare('UPDATE user SET password = :passnew where userId =:userId');
        $stmt->execute(array(
            ':passnew' => $passnew,
            ':userId' => $userId
        ));
    }
}

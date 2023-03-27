<?php

class adminModel
{
  private $db;

  // __construct()
  function __construct($dsn, $username, $password)
  {
    $this->db = new PDO($dsn, $username, $password);
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  function add($name, $email, $pass)
  {
    $stmt = $this->db->prepare("INSERT INTO user (FullName, Email, Pass)
      VALUES (:fullname, :email, :pass)");
    $stmt->execute(array(
      ':fullname' => $name,
      ':email' => $email,
      ':pass' => $pass
    ));
  }
  function updateAvatar($userId, $avatar)
  {
    $sql = "UPDATE admin SET avatar =:a WHERE id =:i";
    $stmt = $this->db->prepare($sql);
    return $stmt->execute(array(
      ':i' => $userId,
      ':a' => $avatar,
    ));
  }

  function find($acc)
  {
    $stmt = $this->db->prepare("select * from admin where account =:acc");
    $stmt->bindParam(':acc', $acc);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}

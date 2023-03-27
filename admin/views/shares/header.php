<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website dang ky chuyen nganh</title>
  <link rel="stylesheet" href="views/css/bootstrap.min.css">



  <!doctype html>
  <html lang="en">

  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    body {
      background-color: #f5f5f5;
    }

    .grid-container {
      margin-top: 50px;
    }

    .form-wrapper {
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }

    .form-wrapper h1 {
      font-size: 30px;
      font-weight: 700;
      color: #444444;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-wrapper label {
      font-size: 20px;
      font-weight: 400;
      color: #444444;
      display: block;
      margin-bottom: 10px;
    }

    .form-wrapper input[type="text"],
    .form-wrapper select {
      width: 100%;
      border-radius: 5px;
      border: 1px solid #cccccc;
      padding: 10px;
      font-size: 16px;
      font-weight: 400;
      color: #444444;
      margin-bottom: 20px;
    }

    .form-wrapper button[type="submit"] {
      background-color: #34a2b2;
      color: #ffffff;
      font-size: 20px;
      font-weight: 700;
      padding: 15px 30px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }

    .form-wrapper button[type="submit"]:hover {
      background-color: #187680;
    }

    .navbar-dark .navbar-nav .nav-link {
      color: rgb(255 255 255);
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="" href="#" style="width: 5%;">
      <img src="http://www.hutech.edu.vn/imgnews/homepage/stories/hinh34/logo%20CMYK-03.png" alt="" style="width: 95%;">
    </a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse text-center justify-content-between" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="?route=list">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=addMovie">Phim Mới</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=addType">Thể Loại Phim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=listUser">Danh sách User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=list">Danh Sách Phim</a>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center">
        <?php
        if (isset($_SESSION['UserId'])) {
          echo "<li class='nav-item'> <a class='nav-link' href='?route=logout'>
              <button class='btn btn-info'>Đăng xuất</button>
              </a></li>";
          // hien thi avata
          $avatar = $_SESSION['Avatar'] ?? 'avatar.jpg';
          echo "<li> <a href='?route=edit-avatar'><img width='40px' src ='views/images/" . $avatar . "'> </a> </li>";
          echo "<li><span class='nav-link font-weight-bold'>Xin chào: " . $_SESSION['Name'] . "</span></li>";
        }
        ?>
      </ul>
    </div>
  </nav>
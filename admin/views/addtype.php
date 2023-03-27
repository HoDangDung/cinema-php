<!doctype html>
<html lang="en">

<head>
  <title>Thể loại phim</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  body {
    min-height: 100vh;
    background-image: url('https://c8.alamy.com/comp/PP84M2/netflix-netflix-background-design-PP84M2.jpg');
  }

  label,
  h3 {
    font-weight: bold;
    font-family: var(--bs-body-font-family) !important;
  }
  .container>form{
    box-shadow: 0 0 1rem 0.5rem black;
    background-color: #f5f5f5d9;
  }
</style>

<body>
  <?php
  include_once('views/shares/header.php');
  ?>
  <div class="container py-4 d-flex justify-content-center">
    <form class="card p-3" method="post" action="?route=addType" style="width: 60%;">
      <h3 class="text-center font-weight-bold">Thêm thể loại</h3>
      <div class="mb-3">
        <label for="fullname" class="form-label">Tên thể loại</label>
        <input type="text" class="form-control" id="type" name="type" required>
      </div>
      <div class="mb-3">
        <label for="fullname" class="form-label">Thể loại</label>
        <select name="types" class="form-control">
          <?php foreach ($types as $t) { ?>
            <option value="<?php echo $t['id'] ?>">
              <?php echo $t['type'] ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-danger font-weight-bold">Thêm</button>
      </div>
    </form>
  </div>

  <?php
  include_once('views/shares/footer.php');
  ?>
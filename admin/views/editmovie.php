<!doctype html>
<html lang="en">

<head>
  <title>Thông tin phim</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
  body {
    min-height: 100vh;
    background-image: url('views/images/background.jpg');
  }

  label,
  h3 {
    font-weight: bold;
    font-family: var(--bs-body-font-family) !important;
  }

  .container>form{
    box-shadow: 0 0 1rem 0.5rem black;
    background-color: #f5f5f5d9
  }
</style>

<body>
  <?php
  include_once('views/shares/header.php');
  ?>
  <div class="container py-4">
    <form class="card p-3" method="post" action="?route=edit&movieId=<?php echo $movie['movieId'] ?>">
      <h3 class="text-center font-weight-bold">Cập nhật phim</h3>
      <div class="mb-3">
        <label for="fullname" class="form-label">Tên phim</label>
        <input type="text" class="form-control" id="movieName" name="movieName" value="<?php echo $movie['movieName'] ?>">
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
      <div class="mb-3">
        <label for="fullname" class="form-label">Poster</label>
        <input type="text" class="form-control" id="poster" name="poster" value="<?php echo $movie['poster'] ?>">
      </div>
      <div class="mb-3">
        <label for="fullname" class="form-label">Link</label>
        <input type="text" class="form-control" id="link" name="link" value="<?php echo $movie['link'] ?>">
      </div>
      <div class="mb-3">
        <label for="fullname" class="form-label">Time</label>
        <input type="number" class="form-control" id="time" name="time" value="<?php echo $movie['time'] ?>">
      </div>
      <div class="mb-3">
        <label for="fullname" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" value=""><?php echo $movie['description'] ?></textarea>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-danger font-weight-bold">Lưu & Thay đổi</button>
      </div>
    </form>
  </div>
  <?php
  include_once('views/shares/footer.php');
  ?>
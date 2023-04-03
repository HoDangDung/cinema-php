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

  .container>form {
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
      <h3 class="text-center font-weight-bold">Danh sách thể loại</h3>
      <div class="mb-3">
        <table class="table text-center">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tên thể loại</th>
              <th scope="col">Mã thể loại</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $index = 0;
            foreach ($types as $t) { ?>
              <tr id="<?php echo $t['id']?>">
                <th scope="row"><?php echo ++$index ?></th>
                <td><?php echo $t['type'] ?></td>
                <td><?php echo $t['id'] ?></td>
                <td>
                  <button type="button" class="btn btn-success btn-type" data-bs-toggle="modal" data-bs-target="#edit" data-id="<?php echo $t['id'] ?>" data-type="<?php echo $t['type'] ?>">
                    Edit
                  </button>
                </td>
                <td>
                  <a href="?route=deletetype&typeId=<?php echo $t['id'] ?>">
                    <button type="button" class="btn btn-primary btn-delete-employee">
                      Delete
                    </button>
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <div class="mb-3">
        <label for="fullname" class="form-label">Thêm thể loại</label>
        <input type="text" class="form-control" id="type" name="type" required>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-danger font-weight-bold">Thêm</button>
      </div>
    </form>
  </div>

  <!-- Modal Edit-->
  <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="edit">Edit Type</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input hidden id="typeid" name="typeid">
          <input type="text" class="form-control" id="edittype" name="edittype" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-save" >Save</button>
        </div>
      </div>
    </div>
  </div>
  <?php
  include_once('views/shares/footer.php');
  ?>
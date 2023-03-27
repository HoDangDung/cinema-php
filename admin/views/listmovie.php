<!doctype html>
<html lang="en">

<head>
    <title>Danh sách phim</title> <!-- Required meta tags -->
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

    tr th,
    td {
        text-align: center;
        font-family: var(--bs-body-font-family);
    }

    body {
        background-color: #f5f5f5 !important;
    }

    tr th {
        font-weight: bold;
    }

    .an {
        display: block;
        display: -webkit-box;
        height: 16px*1.3*3;
        font-size: 16px;
        line-height: 1.3;
        -webkit-line-clamp: 3;
        /* số dòng hiển thị */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        margin-top: 10px;
    }
</style>

<body>
    <?php
    include_once('views/shares/header.php');
    ?>
    <table class="table grid container my-4 bg-white rounded-lg border-0" style="box-shadow: 0 1rem 1rem 0.5rem black">
        <thead>
            <tr>
                <th scope="col">Movie Id</th>
                <th scope="col">Movie Name</th>
                <th scope="col">Movie Type</th>
                <th scope="col">Movie Poster</th>
                <th scope="col">Movie Link</th>
                <th scope="col">Movie Time</th>
                <th scope="col">Movie Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $mv) { ?>
                <tr>
                    <td> <?php echo $mv['movieId'] ?></th>
                    <td> <?php echo $mv['movieName'] ?></th>
                    <td> <?php echo $mv['type'] ?></th>
                    <td> <img src="<?php echo $mv['poster'] ?>" alt="" style="width: 100%;"> </th>
                    <td>
                        <a href="https://youtu.be/<?php echo $mv['link'] ?>" target="_blank">
                            https://youtu.be/<?php echo $mv['link'] ?>
                        </a>
                        </th>
                    <td> <?php echo $mv['time'] ?> minutes</th>
                    <td>
                        <div class="an"> <?php echo $mv['description'] ?>
                        </div>
                        </th>
                    <td>
                        <a href="?route=edit&movieId=<?php echo $mv['movieId'] ?>">
                            <button class="btn btn-primary">EDIT</button>
                        </a>
                    </td>
                    <td>
                        <a href="?route=delete&movieId=<?php echo $mv['movieId'] ?>"> <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Are you sure remove this movie?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo $mv['movieName'] ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    <a href="?route=delete&movieId=<?php echo $mv['movieId'] ?>"> <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once('views/shares/footer.php');
    ?>
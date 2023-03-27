<!doctype html>
<html lang="en">

<head>
    <title>Danh sách User</title> <!-- Required meta tags -->
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
</style>

<body>
    <?php
    include_once('views/shares/header.php');
    ?>
    <h3 class="my-3 text-white text-center font-weight-bold">Danh sách User</h3>

    <table class="table grid container my-4 bg-white rounded-lg border-0" style="box-shadow: 0 1rem 1rem 0.5rem black">
        <thead>
            <tr>
                <th scope="col">User Id</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $u) { ?>
                <tr>
                    <td> <?php echo $u['userId'] ?></th>
                    <td> <?php echo $u['userName'] ?></th>
                    <td> <?php echo $u['email'] ?></th>
                    <td><?php echo $u['password'] ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
    include_once('views/shares/footer.php');
    ?>
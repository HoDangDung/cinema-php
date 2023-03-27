<!doctype html>
<html lang="en">

<head>
    <title>Edit avatar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
include_once('views/shares/header.php');
?>
<?php
if (isset($_SESSION["ErrorEditAvatar"])) { ?>
    <script>
        alert(" <?php echo $_SESSION['ErrorEditAvatar'] ?>");
    </script>
<?php unset($_SESSION["ErrorEditAvatar"]);
} ?>

<body>
    <div style="background-image: url(https://9to5mac.com/wp-content/uploads/sites/6/2022/07/Netflix-testing-new-ways-to-charge-for-password-sharing-in-Latin-America.jpg?quality=82&strip=all);
    min-height: 100vh;">
        <div class="container py-3">
            <form class="card" method="post" action="?route=edit-avatar" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="avatar" class="form-label ">
                        <h5 class="font-weight-bold">Choose Avatar</h5>
                    </label>
                    <input type="file" class="form-control-file" id="avatar" name="avatar">
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary">Lưu Avatar</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    include_once('views/shares/footer.php');
    ?>
<?php
require_once 'models/adminModel.php';
class AdminController
{
    private $model;

    function __construct()
    {
        global $db, $username, $password;
        $this->model = new adminModel($db, $username, $password);
    }
    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $pass = $_POST['pass'];
            $acc = $_POST['acc'];
            session_start();
            $user = $this->model->find($acc);
            if (!empty($user)) {
                $isLogin = password_verify($pass, $acc);
                if (!$isLogin) {
                    $_SESSION['UserId'] = $user['id'];
                    $_SESSION['Name'] = $user['account'];
                    $_SESSION['Avatar'] = $user['Avatar'];
                    header('Location: ?route=list');
                    exit();
                } else {
                    $_SESSION['Error'] = "Sai mat khau";
                    header("Location: ?");
                    exit;
                }
            } else {
                $_SESSION['Error'] = "Tai khoan khong ton tai";
                header("Location: ?");
                exit;
            }
        }
        require_once('views/login.php');
    }

    function editAvatar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
            $isUploaded = $this->uploadAvatar();
            if ($isUploaded) {
                $avatar = htmlspecialchars(basename($_FILES["avatar"]["name"]));
                $userId = $_SESSION['UserId'];
                $isSuccess = $this->model->updateAvatar($userId, $avatar);
                if ($isSuccess) {
                    $_SESSION['Avatar'] = $avatar;
                    header('Location:?route=list');
                    exit;
                } else {
                    $_SESSION['ErrorEditAvatar'] = "Server's Error";
                    header("Location: ?route=edit-avatar");
                    exit;
                }
            } else {
                header("Location: ?route=edit-avatar");
                exit;
            }
        }
        require_once('views/editavatar.php');
    }
    function uploadAvatar()
    {
        $target_dir = "views/images/";
        $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if ($check !== false) {
                $_SESSION["ErrorEditAvatar"] = "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                $_SESSION['ErrorEditAvatar'] = "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $_SESSION["ErrorEditAvatar"] .= "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["avatar"]["size"] > 500000) {
            $_SESSION['ErrorEditAvatar'] .= "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $_SESSION["ErrorEditAvatar"] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $_SESSION["ErrorEditAvatar"] .= "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                // $_SESSION["ErrorEditAvatar"] .= "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                return true;
            } else {
                $_SESSION["ErrorEditAvatar"] .= "Sorry, there was an error uploading your file.";
                return false;
            }
        }
    }

    function logout()
    {
        session_start();
        unset($_SESSION['UserId']);
        unset($_SESSION['Name']);
        unset($_SESSION['Avatar']);
        header("Location: ?");
        exit;
    }
}

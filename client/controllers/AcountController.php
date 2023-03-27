<?php
require_once 'models/acountModel.php';
class AcountController
{
    private $model;

    function __construct()
    {
        global $db, $username, $password;
        $this->model = new AcountModel($db, $username, $password);
    }

    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $user = $this->model->find($email);
            if (!empty($user)) {
                if ($pass == $user['password']) {
                    $_SESSION['userId'] = $user['userId'];
                    $_SESSION['Name'] = $user['userName'];
                    echo '<script>alert("Đăng nhập thành công")</script>';
                    header('Location: ?');
                    exit();
                } else {
                    $_SESSION['Error'] = "Sai mật khẩu";
                    header('Location: ?route=login');
                    exit();
                }
            } else {
                $_SESSION['Error'] = "Tài khoản không tồn tại";
                header("Location: ?route=login");
                exit();
            }
        }
        require_once('views/login.php');
    }

    function logout()
    {
        session_start();
        unset($_SESSION['userId']);
        unset($_SESSION['Name']);
        header("Location: ?");
        exit;
    }

    function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $hash = $_POST['pass'];
            $this->model->register($name, $email, $hash);
            header('Location: ?route=login');
            exit();
        }
        require_once('views/register.php');
    }

    function myaccount()
    {
        $userId = $_GET['userId'];
        $user = $this->model->findUser($userId);
        require_once('views/my-account.php');
    }

    function changeinfo()
    {
        $userId = $_GET['userId'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $this->model->changeinfo($name, $email, $userId);
        $user = $this->model->findUser($userId);
        require_once('views/my-account.php');
    }

    function changepass()
    {
        $userId = $_GET['userId'];
        $passold = $_POST['passold'];
        $passnew = $_POST['passnew'];
        $user = $this->model->findUser($userId);
        session_start();
        if ($passold == $user['password']) {
            $this->model->changepass($passnew, $userId);
            require_once('views/my-account.php');
        } else {
            $_SESSION['Error'] = 'Mật khẩu cũ không đúng';
            require_once('views/my-account.php');
        }
    }
}

<?php
require_once 'models/movieModel.php';
class MovieController
{
    private $model;

    function __construct()
    {
        global $db, $username, $password;
        $this->model = new MovieModel($db, $username, $password);
    }

    function index()
    {
        require_once('views/login.php');
    }

    function list()
    {
        $movies = $this->model->getMoive();
        require_once('views/listmovie.php');
    }

    function addMovie()
    {
        $types = $this->model->getTypes();
        require('views/addmovie.php');
    }

    function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!$_POST['movieName'] || !$_POST['link']) {
                header('Location: ?route=addMovie');
            } else {
                $this->model->add($_POST['movieName'], $_POST['types'], $_POST['poster'], $_POST['link'], $_POST['time'], $_POST['description']);
                header('Location: ?route=list');
            }
        }
    }

    function edit()
    {
        $types = $this->model->getTypes();
        $movieId = $_GET['movieId'];
        if (isset($movieId)) {
            $movie = $this->model->find($movieId);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $this->model->update($_POST['movieName'], $_POST['types'], $_POST['poster'], $_POST['link'], $_POST['time'], $_POST['description'], $movieId);
                header('Location: ?route=list');
            }
            $movies = $this->model->getMoive();
            require_once('views/editmovie.php');
        } else {
            echo "NOT FOUND!";
        }
    }

    function delete()
    {
        $movieId = $_GET['movieId'];
        $this->model->delete($movieId);
        header('Location: ?route=list');
    }

    function addType()
    {
        $types = $this->model->getTypes();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->addType($_POST['type']);
            header('Location: ?route=addType');
        }
        require_once('views/addtype.php');
    }

    function editType()
    {
        $id = $_POST['id'];
        $type = $_POST['edittype'];

        $data = array(
            'id' => $id,
            'type' => $type,
        );
        echo json_encode(['success' => $data]);
        $this->model->updateType($id, $type);
        require_once('views/addtype.php');
    }

    function listUser()
    {
        $user = $this->model->listUser();
        require_once('views/listuser.php');
    }

    function deleteType()
    {
        $typeId = $_GET['typeId'];
        $this->model->deleteType($typeId);
        header('Location: ?route=addType');
    }
}

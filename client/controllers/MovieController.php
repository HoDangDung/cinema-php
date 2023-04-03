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

    function home()
    {
        $movies = $this->model->getMoive();
        require_once('views/home.php');
    }

    function movies()
    {
        require_once('views/movies.php');
    }

    function search()
    {
        require_once('views/search.php');
    }

    function moviesdetails()
    {
        $movieId = $_GET['movieId'];
        if (isset($movieId)) {
            $movie = $this->model->find($movieId);
            $movies = $this->model->getDetailsMovies($movieId);
            require_once('views/moviedetails.php');
        } else {
            echo "NOT FOUND!";
        }
    }
}

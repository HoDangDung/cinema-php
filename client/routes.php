<?php
$routes = [
    '/' => [
        'controller' => 'MovieController',
        'action' => 'home'
    ],
    'movies'=>[
        'controller' => 'MovieController',
        'action' => 'movies'
    ],
    'movie-details'=>[
        'controller' => 'MovieController',
        'action' => 'moviesdetails'
    ],
    'logout' => [
        'controller' => 'AcountController',
        'action' => 'logout'
    ],
    'login' => [
        'controller' => 'AcountController',
        'action' => 'login'
    ],
    'register' => [
        'controller' => 'AcountController',
        'action' => 'register'
    ],
    'myaccount'=>[
        'controller' => 'AcountController',
        'action' => 'myaccount'
    ],
    'changeinfo'=>[
        'controller' => 'AcountController',
        'action' => 'changeinfo'
    ],
    'changepass'=>[
        'controller' => 'AcountController',
        'action' => 'changepass'
    ]

];

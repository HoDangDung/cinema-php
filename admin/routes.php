<?php
$routes = [
    '/' => [
        'controller' => 'MovieController',
        'action' => 'index'
    ],
    'list' => [
        'controller' => 'MovieController',
        'action' => 'list'
    ],
    'addType' => [
        'controller' => 'MovieController',
        'action' => 'addType'
    ],
    'editType' => [
        'controller' => 'MovieController',
        'action' => 'editType'
    ],
    'listUser' => [
        'controller' => 'MovieController',
        'action' => 'listUser'
    ],
    'add' => [
        'controller' => 'MovieController',
        'action' => 'add'
    ],
    'addMovie' => [
        'controller' => 'MovieController',
        'action' => 'addMovie'
    ],
    'edit' => [
        'controller' => 'MovieController',
        'action' => 'edit'
    ],
    'delete' => [
        'controller' => 'MovieController',
        'action' => 'delete'
    ],
    'deletetype' => [
        'controller' => 'MovieController',
        'action' => 'deleteType'
    ],
    'login' => [
        'controller' => 'AdminController',
        'action' => 'login'
    ],
    'logout' => [
        'controller' => 'AdminController',
        'action' => 'logout'
    ],
    'edit-avatar' => [
        'controller' => 'AdminController',
        'action' => 'editAvatar'
    ]
];

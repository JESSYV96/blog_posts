<?php

require '../vendor/autoload.php';

$path = $_SERVER["REQUEST_URI"];
$postController = new \App\Controller\PostController();
$userController = new \App\Controller\UserController();

switch ($path) {
        case '/':
            $postController->home();
            break;
        case "/userlist":
            $userController->userList();
            break;
        case '/admin':
            $userController->admin();
            break;
}

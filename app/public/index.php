<?php

use App\Controller\PostController;
use App\Controller\User\AdminController;
use App\Controller\User\UserController;

require '../vendor/autoload.php';

$path = $_SERVER["REQUEST_URI"];
$postController = new PostController();
$userController = new UserController();
$adminController = new AdminController();

switch ($path) {
    case '/':
        $postController->home();
        break;
    case '/article/create':
        $postController->createArticle();
        break;
    case "/users":
        $userController->userList();
        break;
    case '/admin':
        $adminController->admin();
        break;
}

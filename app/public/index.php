<?php

use App\Controller\CommentController;
use App\Controller\PostController;
use App\Controller\User\AdminController;
use App\Controller\User\UserController;

require '../vendor/autoload.php';

$path = $_SERVER["REQUEST_URI"];
$postController = new PostController();
$userController = new UserController();
$adminController = new AdminController();
$commentController = new CommentController();

switch ($path) {
    case '/':
        $postController->posts();
        break;
    case '/post/create':
        $postController->createPost();
        break;
    case '/post/1':
        //var_dump($_SERVER);
        $postController->postDetails();
        break;
    case "/users":
        $userController->users();
        break;
    case '/admin':
        $adminController->admin();
        break;
    case '/comment/add':
        $commentController->createComment($_POST);
        break;
    case '/comment/delete':;
        $commentController->deleteComment(intval($_POST['commentId']));
        break;
    default:
        echo 'not route found';
}

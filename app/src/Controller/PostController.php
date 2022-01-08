<?php

namespace App\Controller;

use App\Core\PDOFactory;
use App\Repository\PostRepository;
use App\Repository\UserRepository;

class PostController extends BaseController {

    private PostRepository $postRepository;
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository(PDOFactory::getMysqlConnection());
        $this->userRepository = new UserRepository(PDOFactory::getMysqlConnection());
    }

    public function home()
    {
        $posts = $this->postRepository->getPosts();

        $this->render('Post/posts', ['posts' => $posts] , 'Posts');
    }

    public function createArticle()
    {
        $this->render('Post/add_post', [] , 'Add a new post');
    }
}

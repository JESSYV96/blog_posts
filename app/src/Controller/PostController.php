<?php

namespace App\Controller;

use App\Core\PDOFactory;
use App\Repository\PostRepository;

class PostController extends BaseController {

    private PostRepository $postRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository(PDOFactory::getMysqlConnection());
    }

    public function home()
    {
        $posts = $this->postRepository->getPosts();
        // var_dump($posts);

        $this->render();
    }
}

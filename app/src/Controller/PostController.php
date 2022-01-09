<?php

namespace App\Controller;

use App\Core\PDOFactory;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;

class PostController extends BaseController {

    private PostRepository $postRepository;
    private CommentRepository $commentRepository;

    public function __construct()
    {
        $this->postRepository = new PostRepository(PDOFactory::getMysqlConnection());
        $this->commentRepository = new CommentRepository(PDOFactory::getMysqlConnection());
    }

    public function posts()
    {
        $posts = $this->postRepository->getPosts();
        $this->render('Post/posts', ['posts' => $posts] , 'Posts');
    }

    public function postDetails()
    {
        $postId = 1;
        $post = $this->postRepository->getPost($postId);
        $comments = $this->commentRepository->getCommentsPost($postId);
        $this->render('Post/post', ['post' => $post, 'comments' => $comments] , 'Post details');
    }

    public function createPost()
    {
        $this->render('Post/add_post', [] , 'Add a new post');
    }
}

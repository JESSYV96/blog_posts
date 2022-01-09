<?php

namespace App\Controller;

use App\Core\PDOFactory;
use App\Repository\CommentRepository;

class CommentController extends BaseController
{
    private CommentRepository $commentRepository;

    public function __construct()
    {
        $this->commentRepository = new CommentRepository(PDOFactory::getMysqlConnection());
    }

    public function createComment(array $payloadComment): void
    {
        $dateNow = new \DateTime();
        $commentData = [
            'name' => $payloadComment['name'],
            'email' => $payloadComment['email'],
            'content' => $payloadComment['content'],
            'publishedAt' => $dateNow->format('Y-m-d H:i:s'), // MySQL Format
            'postId' => $payloadComment['postId']
        ];

        $this->commentRepository->addComment($commentData);
    }

    public function deleteComment(int $id)
    {

        $this->commentRepository->deleteComment($id);
    }
}

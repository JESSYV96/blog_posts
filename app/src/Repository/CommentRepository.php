<?php

namespace App\Repository;

use App\Entity\Comment;

class CommentRepository extends BaseRepository
{
    public function getCommentsPost(int $postId): array
    {
        $query = $this->PDO->prepare('SELECT * from comment where postId = :postId');
        $query->bindValue('postId', $postId);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_ASSOC);

        $comments = $query->fetchAll();

        foreach ($comments as $comment) {
            $arrObj[] = new Comment($comment);
        }

        return $arrObj ?? [];
    }
}

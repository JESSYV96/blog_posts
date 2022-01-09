<?php

namespace App\Repository;

use App\Entity\Comment;

class CommentRepository extends BaseRepository
{

    public function addComment(array $commentData): void
    {
        $sql = '
            INSERT INTO comment (name, email, content, publishedAt, postId) 
            VALUES (:name, :email, :content, :publishedAt, :postId)
        ';
        $query = $this->PDO->prepare($sql);
        $query->execute($commentData);
    }

    public function deleteComment(int $commentId): void
    {
        $sql = $this->PDO->prepare('DELETE FROM comment WHERE id = :commentId');
        $sql->bindValue('commentId', $commentId);
        $sql->execute();
    }

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

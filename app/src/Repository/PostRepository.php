<?php

namespace App\Repository;

use App\Model\PostDTO;
use PDO;

class PostRepository extends BaseRepository
{
    public function getPosts(): array
    {
        $query = '
            SELECT
                post.title, post.content, post.publishedAt,
                user.firstname, user.lastname
            FROM post
            INNER JOIN user
            ON post.authorId = user.id
            ORDER BY publishedAt DESC
        ';

        $posts = $this->PDO->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($posts as $post) {
            $postsObj[] = new PostDTO($post);
        }

        return $postsObj ?? [];
    }

    public function getPost(int $postId): PostDTO|bool
    {
        $query = '
            SELECT
                post.title, post.content, post.publishedAt,
                user.firstname, user.lastname
            FROM post
            INNER JOIN user
            ON post.authorId = user.id
            WHERE post.id = :postId
        ';
        $statement = $this->PDO->prepare($query);
        $statement->bindValue('postId', $postId);
        $statement->execute();
        $statement->setFetchMode(\PDO::FETCH_ASSOC);

        if (!$result = $statement->fetch()) {
            return false;
        }
        return new PostDTO($result);
    }
}

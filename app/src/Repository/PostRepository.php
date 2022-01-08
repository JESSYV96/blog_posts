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
}

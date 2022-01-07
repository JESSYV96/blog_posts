<?php

namespace App\Repository;

use App\Entity\Post;
use PDO;

class PostRepository extends BaseRepository
{
    public function getPosts(): array
    {
        $query = 'SELECT * FROM post';
        $posts = $this->PDO->query($query)->fetchAll(PDO::FETCH_ASSOC);
        foreach ($posts as $post) {
            $postsObj[] = new Post($post);
        }

        return $postsObj ?? [];
    }

}

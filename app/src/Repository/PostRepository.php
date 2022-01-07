<?php

namespace App\Repository;

use PDO;

class PostRepository extends BaseRepository
{
    public function getPosts(): array
    {
        $query = 'SELECT * FROM post';
        $response = $this->PDO->query($query);

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }

}

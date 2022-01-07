<?php

namespace App\Repository;

use PDO;

class UserRepository extends BaseRepository
{
    public function getUsers(): array
    {
        $query = 'SELECT * FROM user';
        $response = $this->PDO->query($query);

        return $response->fetchAll(PDO::FETCH_ASSOC);
    }
}

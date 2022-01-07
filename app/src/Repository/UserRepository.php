<?php

namespace App\Repository;

use App\Entity\User;

class UserRepository extends BaseRepository
{
    public function getUsers(): array
    {
        $query = 'SELECT * FROM user';
        $users = $this->PDO->query($query);

        foreach ($users as $user) {
            $arrObj[] = new User($user);
        }

        return $arrObj ?? [];
    }
}

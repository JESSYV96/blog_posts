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

    public function getUserById(int $id): User|bool
    {
        $query = $this->PDO->prepare("SELECT * FROM user WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_ASSOC);

        if (!$result = $query->fetch()) {
            return false;
        }
        return new User($result);
    }
}

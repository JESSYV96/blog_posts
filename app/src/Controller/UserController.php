<?php

namespace App\Controller;


use App\Core\PDOFactory;
use App\Repository\UserRepository;

class UserController {

    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository(PDOFactory::getMysqlConnection());
    }

    public function userList()
    {
        $users = $this->userRepository->getUsers();
        var_dump($users);
        echo 'Page utilisateur';
    }

    public function admin()
    {
        echo 'admin';
    }
}

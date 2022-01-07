<?php

namespace App\Controller;


use App\Core\PDOFactory;
use App\Repository\UserRepository;

class UserController extends BaseController {

    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository(PDOFactory::getMysqlConnection());
    }

    public function userList()
    {
        $users = $this->userRepository->getUsers();
        var_dump($users);
        $this->render();
    }

    public function admin()
    {
        echo 'admin';
    }
}

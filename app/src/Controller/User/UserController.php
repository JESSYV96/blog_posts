<?php

namespace App\Controller\User;


use App\Controller\BaseController;
use App\Core\PDOFactory;
use App\Repository\UserRepository;

class UserController extends BaseController {

    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository(PDOFactory::getMysqlConnection());
    }

    public function users()
    {
        $users = $this->userRepository->getUsers();
        $this->render('User/users', ['users' => $users], 'Users');
    }

}

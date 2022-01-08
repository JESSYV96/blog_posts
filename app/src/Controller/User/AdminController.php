<?php

namespace App\Controller\User;

class AdminController extends UserController
{
    public function admin()
    {
        $this->render('User/admin', [], '!!! Administration !!!');
    }
}

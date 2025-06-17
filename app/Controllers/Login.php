<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();

        return view('login', ['users' => $users]);
    }
}

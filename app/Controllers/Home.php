<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $loginModel;

    public function __construct(){

        $this->loginModel= model('LoginModel');

    }

    public function index(): string
    {
        return view('pages/home',$this->loginModel->getData());
    }
}

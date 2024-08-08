<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('User/v_header');
        echo view('welcome_message');
        echo view('User/v_footer');
    }
}

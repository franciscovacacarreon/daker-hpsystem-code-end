<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('daker/layouts/header');
        echo view('daker/components/about');
        echo view('daker/layouts/footer');
    }
}

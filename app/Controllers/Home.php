<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('daker/layouts/header');
        echo view('daker/components/about');
        echo view('daker/components/newsletter');
        echo view('daker/components/service');
        echo view('daker/components/portfolio');
        echo view('daker/components/testimonial');
        echo view('daker/layouts/footer');
    }

    public function about () {
        echo view('daker/layouts/header_page');
        echo view('daker/components/about');
        echo view('daker/layouts/footer');
    }
}

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
        echo view('daker/layouts/header_page', ['name_page' => 'Acerca de nosotros']);
        echo view('daker/components/about');
        echo view('daker/layouts/footer');
    }

    public function service () {
        echo view('daker/layouts/header_page', ['name_page' => 'Servicios']);
        echo view('daker/components/service');
        echo view('daker/layouts/footer');
    }

    public function portfolio () {
        echo view('daker/layouts/header_page', ['name_page' => 'Proyectos']);
        echo view('daker/components/portfolio');
        echo view('daker/layouts/footer');
    }
}

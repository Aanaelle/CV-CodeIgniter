<?php

namespace App\Controllers;

class Projets extends BaseController
{
    public function index()
    {
        echo view('commun/nav');
        echo view('projetsVue');
        echo view('commun/bas');
    }
}

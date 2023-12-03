<?php

namespace App\Controllers;

class Accueil extends BaseController
{
    public function index()
    {
        echo view('commun/nav');
        echo view('accueilVue');
        echo view('commun/bas');
    }
}

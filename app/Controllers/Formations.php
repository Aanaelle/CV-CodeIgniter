<?php

namespace App\Controllers;

class Formations extends BaseController
{
    public function index()
    {
        echo view('commun/nav');
        echo view('formationsVue');
        echo view('commun/bas');
    }
}

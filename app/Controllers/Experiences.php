<?php

namespace App\Controllers;

class Experiences extends BaseController
{
    public function index()
    {
        echo view('commun/nav');
        echo view('experiencesVue');
        echo view('commun/bas');
    }
}

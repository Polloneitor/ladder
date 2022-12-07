<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('index.php');
        echo view('footer.php');
    }

    public function ver_perfil(){
        echo view('header.php');
        echo view('navbar.php');
        echo view('index.php');
        echo view('footer.php');   
    }
        
}

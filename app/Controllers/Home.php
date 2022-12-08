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
        echo view('perfil.php');
        echo view('footer.php');   
    }
    public function crear_pj(){
        echo view('header.php');
        echo view('navbar.php');
        echo view('crear1.php');
        echo view('footer.php');   
    }
    public function logout(){
        $session = session();
        session_destroy();
        return redirect()->to(base_url().'/');
          
    }
        
}

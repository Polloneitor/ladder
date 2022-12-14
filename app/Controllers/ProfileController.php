<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends BaseController
{
    public function index()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('index.php');
        echo view('footer.php');
    }
}
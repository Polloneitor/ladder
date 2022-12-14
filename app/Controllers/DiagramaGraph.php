<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DiagramaGraph extends BaseController
{
    public function index()
    {
        return view('chart');
    }

    public function initChart()
    {

        $session = session();
        $id  = $session->get('id');
        $db = \Config\Database::connect();
        $builder = $db->table('rutina');
        $query = $builder->selectSum("experiencia");
        $query = $builder->selectSum("distancia");
        $query = $builder->select("DAYNAME(created_at) as day");
        $query = $builder->where("userID", 1)->where("distancia != 0")->where("experiencia != 0");
        $query = $builder->groupBy('DAYNAME(created_at)');
        $query = $builder->orderBy('DAYNAME(created_at)', 'ASC')->get();
        $record = $query->getResult();
        $products = [];
        foreach ($record as $row) {
            $products[] = array(
                'day'   => $row->day,
                'exp' => floatval($row->experiencia),
                'dist' => floatval($row->distancia)
            );
        }

        $data['products'] = ($products);
        return view('header.php').
        view('navbar.php').
        view('paginas\grafica', $data).
        view('footer.php');
    }
}

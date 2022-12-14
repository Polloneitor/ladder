<?php

namespace App\Controllers;
use App\Models\personajeModel;
use App\Models\rutinaModel;
use App\Models\tipoModel;
use App\Models\UserModel;
use App\Models\especieModel;
use CodeIgniter\I18n\Time;
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
        $db = \Config\Database::connect();
        $model=new personajeModel($db);
        $users = $model->findAll();
        $data['listaPersonaje']=$users;

        echo view('header.php');
        echo view('navbar.php');
        echo view('perfil.php',$data);
        echo view('footer.php');   
    }
    public function crear_pj(){
        $db = \Config\Database::connect();
        $model=new especieModel($db);
        $users = $model->findAll();
        $data['listaEspecie']=$users;
        echo view('header.php');
        echo view('navbar.php');
        echo view('crear1.php',$data);
        echo view('footer.php');   
    }
    public function logout(){
        $session = session();
        session_destroy();
        return redirect()->to(base_url().'/');
          
    }

    public function upload_image(){
    
        if($imageFile=$this->request->getFile('image')){
          
            if($imageFile->isValid() && !$imageFile->hasMoved()){
            
                $validated = $this->validate([
                    'image'=>[
                        'uploaded[image]',
                        'mime_in[image,image/png,image/jpg,image/gif,image/jpeg]'
                    ]
                ]);

                if($validated){
                    //echo "ok";
                    
                }
                else{
                    var_dump($this->validator->listErrors());
                    return false;
                }
                //$newName = $imageFile->getRandomName();
                $session = session();
                $name= $session->get('name');
                $newName = $name.".jpg";
                $db = \Config\Database::connect();
                $model= new UserModel($db);
                
                $path="C:/xampp/htdocs/ladder/images";
                //echo WRITEPATH;
                $imageFile->move($path,$newName);
                $db = \Config\Database::connect();
                $model=new personajeModel($db);
                $users = $model->findAll();
                $data['listaPersonaje']=$users;
                echo view('header');
                echo view('navbar');
                echo view('perfil',$data);
                echo view('footer');
            }

        }
    }

    public function cambiar_perfil(){
        echo view('header');
        echo view('navbar');
        echo view('paginas/cambiarFoto');
        echo view('footer');
    
    }

    public function crear_personaje(){
        $db = \Config\Database::connect();
        $model=new personajeModel($db);

        $session = session();
        $id=$session->get('id');
        //print_r($this->request->getPost('nombre'));
        //print_r($this->request->getPost('especie'));
        $datos =[
            
            "nombre" => $this->request->getPost('nombre'),
            "userID" =>$id,
            "especieID" =>$this->request->getPost('especie'),

            
        ];
        $model->insert($datos);
        //print_r($this->request->getPost('especie'));
        $users = $model->findAll();
        $data['listaPersonaje']=$users;
        echo view('header');
        echo view('navbar');
        echo view('index');
        echo view('footer');
    
    }
    
    public function ver_rutinas(){
        $db = \Config\Database::connect();
        $model=new rutinaModel($db);
        $model2=new tipoModel($db);
        $users = $model->findAll();
        $users2 = $model2->findAll();
        $data['listaRutina']=$users;
        $data['listaTipo']=$users2;
       
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/rutina.php',$data);
        echo view('footer.php');   
    }

    public function enviar_crear_rutina(){
        $db = \Config\Database::connect();
        $model=new rutinaModel($db);
        $model2=new tipoModel($db);
        $users = $model->findAll();
        $users2 = $model2->findAll();
        $data['listaRutina']=$users;
        $data['listaTipo']=$users2;
        $ejercicio=$this->request->getPost('tipo');
        //print_r($ejercicio);
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/crearRutina.php',$data);
        echo view('footer.php');   
    }

    public function enviar_crear_rutina2(){
        $db = \Config\Database::connect();
        $request = \Config\Services::request();
        $model=new rutinaModel($db);
        $model2=new tipoModel($db);
        $users = $model->findAll();
        $users2 = $model2->findAll();
        $data['listaRutina']=$users;
        $data['listaTipo']=$users2;
        $ejercicio=$this->request->getPost('tipoID');
        $data['listaID']=$ejercicio;
        //print_r($ejercicio);
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/crearRutina2.php',$data);
        echo view('footer.php');  
    }

    public function crear_rutina(){
        $db = \Config\Database::connect();
        $request = \Config\Services::request();
        $model=new rutinaModel($db);
        $model2=new tipoModel($db);
        $users = $model->findAll();
        $users2 = $model2->findAll();
        $data['listaRutina']=$users;
        $data['listaTipo']=$users2;


        $session = session();
        $id=$session->get('id');
        $ejercicio=$this->request->getPost('tipoID');
        $duracion=$this->request->getPost('duracion');
        $repeticiones=$this->request->getPost('repeticiones');
        $distancia=$this->request->getPost('distancia');
        $experiencia=($distancia*$duracion)+($duracion*$repeticiones);
        $datos =[
            
            "tipoID" => $ejercicio,
            "userID" => $id,
            "duracion"=> $duracion,
            "repeticiones"=>$repeticiones,
            "distancia"=>$distancia,
            "experiencia"=>$experiencia,

            
        ];
        $model->insert($datos);

        $data['listaID']=$ejercicio;
        //print_r($ejercicio);
        $db = \Config\Database::connect();
        $request = \Config\Services::request();
        echo view('header.php');
        echo view('navbar.php');
        echo view('index.php',$data);
        echo view('footer.php');  
    }

    public function ver_avances()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/avances.php');
        echo view('footer.php');
    }

    public function ver_customizacion()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/customizar.php');
        echo view('footer.php');
    }

    public function ver_codigo()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/codigo.php');
        echo view('footer.php');
    }

    public function ver_xd()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/xd.php');
        echo view('footer.php');
    }

    public function ver_juego1()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/juego1.php');
        echo view('footer.php');
    }

    public function ver_mapa()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/mapa.php');
        echo view('footer.php');
    }

    public function ver_detalles()
    {
        echo view('header.php');
        echo view('navbar.php');
        echo view('paginas/detalles.php');
        echo view('footer.php');
    }








}

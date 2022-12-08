<?php

namespace App\Models;

use CodeIgniter\Model;

class rutinaModel extends Model
{
    protected $table      = 'rutina';
    protected $primaryKey = 'codigoRutina';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['tipoID','duracion','repeticiones','fecha','distancia','experiencia','userID'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        
    ];

    protected $validationMessages =[
       
    ];
    protected $skipValidation     = false;

  

    
}
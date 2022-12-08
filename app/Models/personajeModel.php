<?php

namespace App\Models;

use CodeIgniter\Model;

class personajeModel extends Model
{
    protected $table      = 'personaje';
    protected $primaryKey = 'personajeID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['codSombrero','codRopa','codArma','codAccesorio','nivel','vida','daño','inventarioID','nombre','userID','damage','especieID'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        
    ];

    protected $validationMessages =[
       
    ];
    protected $skipValidation     = false;

    

    

    
}
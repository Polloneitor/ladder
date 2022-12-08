<?php

namespace App\Models;

use CodeIgniter\Model;

class tipoModel extends Model
{
    protected $table      = 'tipo';
    protected $primaryKey = 'tipoID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nombreTipo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        
    ];

    protected $validationMessages =[
       
    ];
    protected $skipValidation     = false;

    

    

    
}
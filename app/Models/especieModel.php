<?php

namespace App\Models;

use CodeIgniter\Model;

class especieModel extends Model
{
    protected $table      = 'especie';
    protected $primaryKey = 'especieID';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['nombre'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules = [
        
    ];

    protected $validationMessages =[
       
    ];
    protected $skipValidation     = false;

  

    
}
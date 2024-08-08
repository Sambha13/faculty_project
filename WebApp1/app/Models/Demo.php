<?php

namespace App\Models;

use CodeIgniter\Model;

class Demo extends Model
{
    protected $table = 'users'; 
    protected $primaryKey = 'id'; 

    protected $allowedFields = ['emp_code', 'email', 'password']; 
    protected $useTimestamps = true; // if you use created_at/updated_at fields
}

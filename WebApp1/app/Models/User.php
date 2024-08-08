<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users'; 
    protected $primaryKey = 'emp_code'; 

    protected $allowedFields = ['emp_code', 'email', 'password']; 
    protected $returnType = 'array';
    protected $useTimestamps = false; 

    protected $validationRules = [
        'emp_code' => 'required|min_length[5]|max_length[15]',
        'email'    => 'required|valid_email',
        'password' => 'required|min_length[6]',
    ];

    protected $validationMessages = [
        'emp_code' => [
            'required' => 'EMP Code is required',
            'min_length' => 'EMP Code must be at least 5 characters long',
            'max_length' => 'EMP Code cannot exceed 15 characters',
        ],
        'email' => [
            'required' => 'Email is required',
            'valid_email' => 'Please provide a valid email address',
        ],
        'password' => [
            'required' => 'Password is required',
            'min_length' => 'Password must be at least 6 characters long',
        ],
    ];
}

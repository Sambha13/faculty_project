<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('personal_info.php'); // This should correspond to the name of your view file
    }
}

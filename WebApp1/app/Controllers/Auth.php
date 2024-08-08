<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function auth1()
    {
        $emp_code = $this->request->getPost('emp_code');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new User();

        $user = $model->where('emp_code', $emp_code)
                      ->where('email', $email)
                      ->first();

        if ($user && password_verify($password, $user['password'])) {
            // Set user session or any other necessary data
            // For example, using CodeIgniter session
            $session = \Config\Services::session();
            $session->set('user', $user);

            // Redirect to the dashboard
            return redirect()->to('/personal_info');
        } else {
            // Return to the login page with an error message
            return redirect()->back()->withInput()->with('error', 'Invalid credentials');
        }
    }
}


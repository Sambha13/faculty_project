<?php

namespace App\Controllers;

class Home extends BaseController
{
   
    public function signup(): string
    {
        return view('signup');
    }

    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function Sinhgadportal(): string
    {
        return view('Sinhgadportal');
    }
    public function Profile(): string
    {
        return view('Profile');
    }
    public function Performance_Appraisal(): string
    {
        return view('Performance_Appraisal');
    }
    public function My_Appraisal(): string
    {
        return view('My_Appraisal');
    }
    public function Contact(): string
    {
        return view('Contact');
    }
   
    public function forgot_password(): string
    {
        return view('forgot_password');
    }
    public function personal_info(): string
    {
        return view('personal_info');
    }
}



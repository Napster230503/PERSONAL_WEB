<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Ganti welcome_message jadi path file kamu
        return view('home_page/index'); 
    }

    public function contact()
    {
        // Tambahkan fungsi ini untuk halaman contact
        return view('home_page/contact');
    }

    public function experience()
    {
        return view('home_page/experience'); 
    }
}
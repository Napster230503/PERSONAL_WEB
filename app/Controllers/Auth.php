<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        // Menampilkan halaman login
        return view('auth/login');
    }

    public function login_process()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Ini contoh simpel, nanti Anda bisa ganti dengan data dari Database
        if ($username == 'fahmi' && $password == 'Balifatapas_1') {
            $session->set([
                'username'   => $username,
                'isLoggedIn' => true
            ]);
            return redirect()->to(base_url('admin/experience'));
        } else {
            return redirect()->back()->with('error', 'Username atau Password salah!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
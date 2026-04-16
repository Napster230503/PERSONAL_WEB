<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        // Menampilkan halaman login
        return view('auth/login');
    }

    // --- FUNGSI BARU UNTUK ISI DATA PERTAMA ---
    public function save_register()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $data = [
            'username' => 'fahmi',
            'password' => password_hash('Balifatapas_1', PASSWORD_DEFAULT) // Enkripsi password
        ];

        if ($builder->insert($data)) {
            return "User berhasil didaftarkan ke TiDB! Silakan hapus fungsi ini nanti setelah selesai.";
        }
    }

    public function login_process()
    {
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // 1. Koneksi ke Database TiDB
        $db = \Config\Database::connect();
        $user = $db->table('users')->where('username', $username)->get()->getRow();

        // 2. Cek apakah usernamenya ada?
        if ($user) {
            // 3. Cek apakah password (input) cocok dengan password (hash di database)
            if (password_verify($password, $user->password)) {
                $session->set([
                    'username'   => $user->username,
                    'isLoggedIn' => true
                ]);
                return redirect()->to(base_url('admin/experience'));
            } else {
                return redirect()->back()->with('error', 'Password salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Username tidak ditemukan!');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
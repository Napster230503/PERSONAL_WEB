<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    /**
     * Logika yang dijalankan SEBELUM akses ke controller
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        // Kita cek, apakah session bernama 'isLoggedIn' bernilai true?
        if (!session()->get('isLoggedIn')) {
            // Jika tidak ada session (belum login), tendang ke halaman login
            return redirect()->to(base_url('login'))->with('error', 'Akses ditolak. Silakan login dulu!');
        }
    }

    /**
     * Logika yang dijalankan SESUDAH akses ke controller
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Biarkan kosong saja
    }
}
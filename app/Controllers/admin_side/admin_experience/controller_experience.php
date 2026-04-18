<?php

namespace App\Controllers\admin_side\admin_experience;

use App\Controllers\BaseController;
// Panggil Model yang sudah dibuat
use App\Models\admin_side\admin_experience\model_experience;

class controller_experience extends BaseController
{
    protected $experienceModel;

    public function __construct()
    {
        // Inisialisasi model agar bisa dipakai di semua fungsi
        $this->experienceModel = new model_experience();
    }

    public function index()
    {
        $data = [
            'title'      => 'Manage Experience',
            'experience' => $this->experienceModel->findAll(), // Ambil semua data dari TiDB
        ];

        // Sesuaikan dengan path file view Anda
        return view('admin_side/admin_experience/admin_experience', $data);
    }

    public function save()
    {
        // Mengambil data dari form berdasarkan atribut 'name' di input
        $this->experienceModel->save([
            'tgl_mulai'     => $this->request->getPost('tgl_mulai'),
            'tgl_akhir'     => $this->request->getPost('tgl_akhir'),
            'nama_instansi' => $this->request->getPost('nama_instansi'),
            'jabatan'       => $this->request->getPost('jabatan'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
        ]);

        // Redirect kembali ke halaman experience setelah berhasil simpan
        return redirect()->to(base_url('admin/experience'))->with('success', 'Data berhasil disimpan!');
    }
}
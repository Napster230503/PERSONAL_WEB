<?php

namespace App\Models\admin_side\admin_experience;

use CodeIgniter\Model;

class model_experience extends Model
{
    // 1. Nama tabel yang ada di database TiDB Anda
    protected $table            = 'experience'; 
    
    // 2. Nama kolom primary key-nya
    protected $primaryKey       = 'id_experience';

    // 3. Kolom mana saja yang boleh diisi (harus sama dengan nama di database & input form)
    protected $allowedFields    = [
        'tgl_mulai', 
        'tgl_akhir', 
        'nama_instansi', 
        'jabatan', 
        'deskripsi'
    ];

    // 4. (Opsional) Aktifkan fitur otomatis mencatat waktu buat/update
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';
}
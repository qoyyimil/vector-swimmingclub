<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table            = 'galeri';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    
    // Daftarkan kolom yang boleh diisi (Mass Assignment)
    protected $allowedFields    = ['judul', 'deskripsi', 'nama_file', 'created_at'];

    // Aktifkan timestamp otomatis bawaan CI4 jika dibutuhkan nanti
    protected $useTimestamps    = false;
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $data['daftar_kelas'] = $kategoriModel->findAll();

        return view('pages/kategori', $data);
    }
}
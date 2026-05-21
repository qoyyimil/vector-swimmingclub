<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class Galeri extends BaseController
{
    public function index()
    {
        $galeriModel = new GaleriModel();
        
        // Ambil semua data foto dari database, urutkan dari yang terbaru
        $data['foto_klub'] = $galeriModel->orderBy('id', 'DESC')->findAll();

        // Lempar data ke view terpusat kita
        return view('pages/galeri', $data);
    }
}
<?php

namespace App\Controllers;

use App\Models\GaleriModel;
use App\Models\KategoriModel;
use App\Models\VenueModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $galeriModel   = new GaleriModel();
        $kategoriModel = new KategoriModel();
        $venueModel    = new VenueModel();

        // Ambil data untuk ditampilkan di Landing Page
        $data['galeri']   = $galeriModel->orderBy('id', 'DESC')->findAll(3); // Ambil 3 foto terbaru
        $data['kategori'] = $kategoriModel->findAll();
        $data['venue']    = $venueModel->findAll();

        return view('pages/dashboard', $data);
    }
}
<?php

namespace App\Controllers\Admin\Konten;

use App\Controllers\BaseController;
use App\Models\VenueModel;

class ManageVenue extends BaseController
{
    public function index()
    {
        $venueModel = new VenueModel();
        $data['venue'] = $venueModel->findAll();
        
        return view('admin/venue/index', $data);
    }

    public function create_page()
    {
        return view('admin/venue/tambah');
    }

    public function create()
    {
        $venueModel = new VenueModel();
        $venueModel->save([
            'nama_kolam' => $this->request->getPost('nama_kolam'),
            'alamat'     => $this->request->getPost('alamat'),
            'jadwal'     => $this->request->getPost('jadwal')
        ]);

        return redirect()->to(base_url('admin/venue/data'))->with('success', 'Jadwal venue berhasil ditambah!');
    }
}
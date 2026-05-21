<?php

namespace App\Controllers\Admin\Konten;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class ManageKategori extends BaseController
{
    // List data kelas untuk admin (Akses: admin/kategori/data)
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->findAll();
        
        return view('admin/kategori/index', $data);
    }

    // Form tambah kelas (Akses: admin/kategori/tambah)
    public function create_page()
    {
        return view('admin/kategori/tambah');
    }

    // Eksekusi simpan kelas (Akses POST: admin/kategori/submittambah)
    public function create()
    {
        $kategoriModel = new KategoriModel();
        $kategoriModel->save([
            'nama_kelas' => $this->request->getPost('nama_kelas'),
            'deskripsi'  => $this->request->getPost('deskripsi'),
            'harga'      => $this->request->getPost('harga')
        ]);

        return redirect()->to(base_url('admin/kategori/data'))->with('success', 'Kategori kelas berhasil ditambah!');
    }
}
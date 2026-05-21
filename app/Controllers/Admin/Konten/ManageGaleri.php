<?php

namespace App\Controllers\Admin\Konten;

use App\Controllers\BaseController;
use App\Models\GaleriModel;

class ManageGaleri extends BaseController
{
    // List data galeri yang dilihat admin (diakses dari: admin/galeri/data)
    public function index()
    {
        $galeriModel = new GaleriModel();
        $data['galeri'] = $galeriModel->findAll();

        return view('admin/galeri/index', $data);
    }

    // Halaman form tambah data (diakses dari: admin/galeri/tambah)
    public function create_page()
    {
        return view('admin/galeri/tambah');
    }

    // Proses submit tambah data (diakses dari POST: admin/galeri/submittambah)
    public function create()
    {
        $fileGambar = $this->request->getFile('foto');

        // Validasi: Pastikan ada file yang di-upload dan tidak ada error transfer
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambarBaru = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/uploads/galeri', $namaGambarBaru);
        } else {
            $namaGambarBaru = 'default.jpg';
        }

        $galeriModel = new GaleriModel();
        $galeriModel->save([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'nama_file' => $namaGambarBaru
        ]);

        return redirect()->to(base_url('admin/galeri/data'))->with('success', 'Foto berhasil di-upload!');
    }

    // Fungsi form edit, update, dan delete bisa kamu turunkan dengan pola OOP yang sama
}
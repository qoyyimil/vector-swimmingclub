<?php

namespace App\Controllers\Admin\Konten;

use App\Controllers\BaseController;
use App\Models\TrackRecordModel;

class ManageTrackRecord extends BaseController
{
    public function index()
    {
        $model = new TrackRecordModel();
        $data['records'] = $model->findAll();
        return view('admin/track_record/index', $data);
    }

    public function create_page()
    {
        return view('admin/track_record/tambah');
    }

    public function create()
    {
        $fileFoto = $this->request->getFile('foto');
        $namaFotoBaru = 'default.jpg';

        if ($fileFoto && $fileFoto->isValid() && !$fileFoto->hasMoved()) {
            $namaFotoBaru = $fileFoto->getRandomName();
            $targetPath = ROOTPATH . 'public/uploads/track_record';
            
            if (!is_dir($targetPath)) {
                mkdir($targetPath, 0777, true);
            }
            $fileFoto->move($targetPath, $namaFotoBaru);
        }

        $model = new TrackRecordModel();
        $model->save([
            'prestasi'   => $this->request->getPost('prestasi'),
            'nama_atlet' => $this->request->getPost('nama_atlet'),
            'kejuaraan'  => $this->request->getPost('kejuaraan'),
            'foto'       => $namaFotoBaru
        ]);

        return redirect()->to(base_url('admin/track-record/data'))->with('success', 'Data prestasi berhasil ditambah!');
    }
}
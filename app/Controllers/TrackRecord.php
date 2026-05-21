<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TrackRecordModel;

class TrackRecord extends BaseController
{
    public function index()
    {
        $model = new TrackRecordModel();
        $data['daftar_prestasi'] = $model->findAll();
        
        return view('pages/track_record', $data);
    }
}
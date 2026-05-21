<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\VenueModel;

class Venue extends BaseController
{
    public function index()
    {
        $venueModel = new VenueModel();
        $data['daftar_venue'] = $venueModel->findAll();

        return view('pages/venue', $data);
    }
}
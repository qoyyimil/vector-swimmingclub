<?php

namespace App\Models;

use CodeIgniter\Model;

class TrackRecordModel extends Model
{
    protected $table            = 'track_record';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['prestasi', 'nama_atlet', 'kejuaraan', 'foto'];
}
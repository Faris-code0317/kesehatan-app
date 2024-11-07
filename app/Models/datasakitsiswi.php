<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasakitsiswi extends Model
{
    use HasFactory;

    protected $table = 'datasakitsiswis';

    protected $fillable = [
        'nama_lengkap',
        'kelas',
        'wali_kelas',
        'keluhan',
        'status_pengobatan',
        'tanggal_sakit',
    ];
}


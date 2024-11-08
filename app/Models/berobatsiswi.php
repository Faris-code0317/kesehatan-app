<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berobatsiswi extends Model
{
    use HasFactory;

    protected $table = 'berobatsiswis';

    protected $fillable = [
        'nama_lengkap',
        'kelas',
        'wali_kelas',
        'keluhan',
        'status_pengobatan',
        'nama_dokter',
        'tanggal_sakit',
        'tanggal_berobat',
        'jumlah_kunjungan',
        'nama_obat',
        'catatan_dokter',
    ];
}

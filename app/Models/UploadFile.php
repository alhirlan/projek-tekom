<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_rkat',
        'nama_kegiatan',
        'tanggal_kegiatan',
        'id_ormawa',
        'status',
    ];
}

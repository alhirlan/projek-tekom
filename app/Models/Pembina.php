<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIK',
        'NPI',
        'NIP',
        'nama_lengkap',
    ];
}

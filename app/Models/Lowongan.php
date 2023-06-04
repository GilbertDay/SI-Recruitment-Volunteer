<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = "lowongan";
    protected $primaryKey = 'id_lowongan';
    use HasFactory;

    protected $fillable = [
        'id_lowongan', 'judul', 'syarat','deskripsi','waktu',
    ];
}


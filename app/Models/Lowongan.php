<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = "lowongan";
    // protected $primaryKey = 'id_lowongan';

    public function unit() {
        return $this->belongsTo("App\Models\Unit");
    }

    protected $fillable = [
        'id_lowongan','unit_id', 'judul','verifikasi_berkas','syarat','deskripsi','waktu',
    ];
}


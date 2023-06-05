<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table = "lamaran";

    public function user() {
        return $this->belongsTo("App\Models\User");
    }
    public function lowongan() {
        return $this->belongsTo("App\Models\Lowongan");
    }

}

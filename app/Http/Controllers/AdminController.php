<?php

namespace App\Http\Controllers;
use App\Models\Lowongan;

use Illuminate\Http\Request;
use \Illuminate\Contracts\Support\Renderable;
class AdminController extends Controller
{

    public function beranda()
    {
        $lowongan = Lowongan::all();
        return view('admin.adminlowongan', compact('lowongan'));
    }
}

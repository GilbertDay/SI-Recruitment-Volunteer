<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lamaran;
use PDF;

use Illuminate\Http\Request;
use \Illuminate\Contracts\Support\Renderable;

class UserController extends Controller
{

    public function beranda()
    {
        return view('user');
    }

    public function riwayat($id)
    {
        // $riwayat = User::find($id);
        $lamaran = Lamaran::where('user_id',$id)->get();
        return view('riwayat',compact('lamaran'));
    }

    public function viewCv($cv){
        $path = public_path('storage/cv/'.$cv);
        return response()->file($path);
    }
    public function viewTranskrip($transkrip){
        $path = public_path('storage/transkrip_nilai/'.$transkrip);
        return response()->file($path);
    }
}

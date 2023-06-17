<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use \Illuminate\Contracts\Support\Renderable;
use App\Models\Lowongan;
use App\Models\Unit;
use App\Models\Lamaran;
use Auth;

class KepalaUnit extends Controller
{

    public function beranda()
    {
        return view('admin');
    }

    public function datalowongan()
    {
        $lowongan = Lowongan::where('user_id',(Auth::user()->id))->get();
        return view('datalowongan', compact('lowongan'));
    }

    public function formlowongan()
    {
        $unit = Unit::all();
        return view('formLowongan', compact('unit'));

    }

    public function formeditLowongan($id){
        $lowongan = Lowongan::find($id);
        $unit = Unit::all();
        return view('formEditLowongan', compact('lowongan','unit'));
    }

    public function addlowongan(Request $req)
    {
        // $syarat = implode(", ",$_POST[syarat]);
        $data_lowongan = new Lowongan;
        $data_lowongan->judul = $req->judul;
        $data_lowongan->unit_id = $req->unit;
        $data_lowongan->user_id = $req->user_id;
        $data_lowongan->syarat = implode(',', (array) $req->input('syarat', []));
        $data_lowongan->jenis = $req->jenis;
        $data_lowongan->tanggal_buka = $req->tanggal_buka;
        $data_lowongan->tanggal_tutup = $req->tanggal_tutup;
        $data_lowongan->deskripsi = $req->deskripsi;
        $data_lowongan->save();
        return redirect("/datalowongan");
    }

    public function editlowongan(Request $req, $id)
    {
        // $syarat = implode(", ",$_POST[syarat]);
        $data_lowongan = Lowongan::find($id);
        $data_lowongan->judul = $req->judul;
        $data_lowongan->unit_id = $req->unit;
        $data_lowongan->user_id = $req->user_id;
        $data_lowongan->syarat = implode(',', (array) $req->input('syarat', []));
        $data_lowongan->jenis = $req->jenis;
        $data_lowongan->tanggal_buka = $req->tanggal_buka;
        $data_lowongan->tanggal_tutup = $req->tanggal_tutup;
        $data_lowongan->deskripsi = $req->deskripsi;
        $data_lowongan->save();
        return redirect("/datalowongan");
    }

    public function deletelowongan($id){
        $data_lowongan = Lowongan::find($id)->delete();
        return redirect("/datalowongan");
    }

    public function showPelamar(){
        $lowongan = Lowongan::where('user_id',(Auth::user()->id))->get();
        $daftarPelamar = Lamaran::all();
        return view('kepalaUnit.daftarPelamar', compact(['daftarPelamar','lowongan']));
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

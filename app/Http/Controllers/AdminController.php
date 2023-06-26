<?php

namespace App\Http\Controllers;
use App\Models\Lowongan;

use App\Models\Unit;
use App\Models\User;
use App\Models\Lamaran;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;
use \Illuminate\Contracts\Support\Renderable;
class AdminController extends Controller
{

    public function adminlowongan()
    {
        $lowongan = Lowongan::all();

        return view('admin.adminlowongan', compact('lowongan'));
        $user = User::where('role','unit')->get();
        return view('admin.adminlowongan', compact('lowongan','user'));
    }
    public function adminunit()
    {
        $unit = Unit::all();
        return view('admin.adminunit', compact('unit'));
    }

    public function formunit()
    {
        $unit = Unit::all();
        return view('admin.formunit', compact('unit'));

    }

    public function addunit(Request $req)
    {
        $user = new User;
        $user->name = $req->nama;
        $user->email = $req->email;
        $user->role = 'unit';
        $user->password = Hash::make($req->password);
        $user->save();

        $ambilUser = User::where('email',$req->email)->get();
        foreach ($ambilUser as $item){
            $data_unit = new Unit;
            $data_unit->user_id = $item->id;
            $data_unit->nama = $req->nama;
            $data_unit->email = $req->email;
            $data_unit->no_telp = $req->no_telp;
            $data_unit->deskripsi_unit = $req->deskripsi_unit;
            $data_unit->save();
        }
        return redirect("/adminunit");
    }

    public function formEditUnit($id){
        $user = User::find($id);
        $unit = Unit::where('user_id', $id)->first();

        return view('admin.formEditUnit', compact('user','unit'));
    }

    public function editUnit(Request $req, $id){
        $user = User::find($id);
        $user->name = $req->nama;
        $user->email = $req->email;
        $user->save();

        $unit = Unit::where('user_id',$id)->first();
        $unit->nama = $req->nama;
        $unit->email = $req->email;
        $unit->no_telp = $req->no_telp;
        $unit->deskripsi_unit = $req->deskripsi_unit;
        $unit->save();

        return redirect("/adminunit");
    }

    public function deleteUnit($id){
        $user = User::find($id)->delete();
        return redirect()->back();
    }

    public function liatPelamar($id){
        $lamaran = Lamaran::where('lowongan_id',$id)->get();
        $lowongan = Lowongan::find($id);
        return view('admin.liatPelamar', compact('lamaran','lowongan'));
    }
}

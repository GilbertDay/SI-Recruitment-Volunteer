<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Http\Request;

class LamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $lowongan = Lowongan::where('id',$id)->get();
        $syaratArray = [];
        foreach ($lowongan as $data) {
            $syarat = explode(',', $data->syarat);
            $syaratArray[] = $syarat;
        }
        return view ('formLamar',compact('lowongan','syaratArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $cekLamar = Lamaran::where('user_id',$req->user_id)->get();

        foreach ($cekLamar as $item){
            if($item->lowongan_id == $req->lowongan_id && $item->user_id == $req->user_id){
                return redirect('/riwayat/'.$req->user_id)->with('data-ready','Anda sudah pernah melamar di Lowongan ini');
            }else{
                $lamaran = new Lamaran;
                $lamaran->lowongan_id = $req->lowongan_id;
                $lamaran->user_id = $req->user_id;
                if($req->file('transkrip_nilai')){
                    $fileName = time().'_'.$req->transkrip_nilai->getClientOriginalName();
                    $lamaran->transkrip_nilai = $fileName;
                    $req->transkrip_nilai->move(public_path('storage/transkrip_nilai'), $fileName);
                }
                if($req->file('cv')){
                    $fileName = time().'_'.$req->cv->getClientOriginalName();
                    $lamaran->cv = $fileName;
                    $req->cv->move(public_path('storage/cv'), $fileName);
                }
                $lamaran->save();
                // Tambah Jumlh Pendaftar
                $lowongan = Lowongan::find($req->lowongan_id);
                $lowongan->jml_pendaftar = $lowongan->jml_pendaftar + 1;

                $lowongan->save();
                return redirect('/');
            }
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function show(Lamaran $lamaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Lamaran $lamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lamaran $lamaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lamaran  $lamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lamaran $lamaran)
    {
        //
    }
}

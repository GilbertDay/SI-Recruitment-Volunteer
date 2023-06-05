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
        return view ('formLamar',compact('lowongan'));
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
        $lamaran = new Lamaran;
        $lamaran->lowongan_id = $req->lowongan_id;
        $lamaran->user_id = $req->user_id;
        $lamaran->semester = $req->semester;
        $lamaran->ipk = 3;
        if($req->file('transkrip_nilai')){
            $fileName = $req->transkrip_nilai->getClientOriginalName();
            $lamaran->transkrip_nilai = $fileName;
            $req->transkrip_nilai->move(public_path('storage/transkrip_nilai'), $fileName);
        }
        if($req->file('cv')){
            $fileName = $req->cv->getClientOriginalName();
            $lamaran->cv = $fileName;
            $req->cv->move(public_path('storage/cv'), $fileName);
        }
        $lamaran->save();
        return redirect('/');
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

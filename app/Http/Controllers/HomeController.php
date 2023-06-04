<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Lowongan;
use App\Models\Unit;
use App\Models\Detail_Lowongan;

use App\Http\Requests\StoreLowonganRequest;
use App\Http\Requests\UpdateLowonganRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lowongan = Lowongan::all();
        $unit = Unit::all();
        return view ('home', ['lowongan'=>$lowongan], ['unit'=>$unit]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLowonganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLowonganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detaillowongan = Detail_Lowongan::where('id_lowongan',$id)->get();
        // return dd($lowongan);
        return view ('detailLowongan', ['detaillowongan'=>$detaillowongan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lowongan $lowongan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLowonganRequest  $request
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLowonganRequest $request, Lowongan $lowongan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lowongan  $lowongan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lowongan $lowongan)
    {
        //
    }
}

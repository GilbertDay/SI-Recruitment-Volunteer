<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Contracts\Support\Renderable;
class AdminController extends Controller
{

    public function beranda()
    {
        return view('admin');
    }
}

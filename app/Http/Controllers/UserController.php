<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Contracts\Support\Renderable;
class UserController extends Controller
{

    public function beranda()
    {
        return view('user');
    }
}

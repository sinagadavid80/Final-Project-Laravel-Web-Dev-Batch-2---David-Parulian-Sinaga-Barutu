<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ddata_guru;



class HomeController extends Controller
{
    public function homepage()
    {
        $ddata_gurus = ddata_guru::get();
        // var_dump($ddata_gurus);
        return view('homepage', compact("ddata_gurus"));
    }
}

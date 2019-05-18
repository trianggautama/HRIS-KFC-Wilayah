<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class outletController extends Controller
{

    public function index(){

        return view('outlet.index');
    }

    public function edit_profil(){

        return view('outlet.edit_profil');
    }
}

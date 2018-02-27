<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Seletivo;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seletivos = Seletivo::all();
        return view('home', compact('seletivos'));
    }
}

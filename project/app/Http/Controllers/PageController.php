<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accueil()
    {
        return view('login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home', [
            'cameroun' => Information::where('pays', '=', 'Cameroun')->get(),
            'tchad' => Information::where('pays', '=', 'Tchad')->get(),
            'centraf' => Information::where('pays', '=', 'Centrafrique')->get(),
            'congo' => Information::where('pays', '=', 'Congo')->get(),
            'guinee' => Information::where('pays', '=', 'Guinée-Equatoriale')->get(),
            'gabon' => Information::where('pays', '=', 'Gabon')->get(),
            'saotome' => Information::where('pays', '=', 'Sao Tomé-et-Principe')->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function home2()
    // {
    //     return view('home2');
    // }
}

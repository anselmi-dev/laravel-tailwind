<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Retorna la vista del home
     *
     * @return  view
     */
    public function home () {
        return view('home');
    }
}

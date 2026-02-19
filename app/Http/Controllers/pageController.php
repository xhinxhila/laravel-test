<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        $mostrarR = true;
        return view('home', ['mostrarR' => $mostrarR]);
    }

    public function services()
    {
        $mostrarR = false;
        $title = 'SERVICES - ' . rand(0, 100);
        return view('services', ['title' => $title, 'mostrarR' => $mostrarR]);
    }

    public function mostraData()
    {
        $mostrarR = false;
        $time = date('d/m/Y');
        return view('contato', ['data' => $time, 'mostrarR' => $mostrarR]);
    }
};

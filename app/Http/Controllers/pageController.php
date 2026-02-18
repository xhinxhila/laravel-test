<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
   public function mostraData()
    {
       $time = ['data' => date('d/m/Y')];
       return view('contato', $time);
    }

    public function home(){
        return view('home');
    }

    public function services(){
        $title = 'SERVICES - ' . rand(0, 100);
        return view('services', ['title'=> $title]);
    }

};

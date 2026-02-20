<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        $services = [
            ['name' => 'Serviço 01', 'description' => 'descrição de serviço 01'],
            ['name' => 'Serviço 02', 'description' => 'descrição de serviço 02'],
            ['name' => 'Serviço 03', 'description' => 'descrição de serviço 03'],
            ['name' => 'Serviço 04', 'description' => 'descrição de serviço 04'],
            ['name' => 'Serviço 05', 'description' => 'descrição de serviço 05'],
        ];

        // titulo aleatorio
        $title = 'SERVICES - ' . rand(0, 100);
        return view('services', ['title' => $title, 'services' => $services]);
    }

    public function mostraData()
    {

        $time = date('d/m/Y');
        return view('contato', ['data' => $time]);
    }
};

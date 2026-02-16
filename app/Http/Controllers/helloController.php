<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function helloWord($nascimento, $nome) {
    $data = [
        'nasc' => 2026 - $nascimento,
        'nome' => $nome
    ];
    return view('calcula-idade', $data);
}
}

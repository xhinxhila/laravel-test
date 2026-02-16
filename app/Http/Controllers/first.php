<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class first extends Controller
{
   function teste ($name, $surname) {

    // return view('hello');
    $result = 'Nome ' . $name . '<br> Surname ' . $surname;

    return $result;
}
}

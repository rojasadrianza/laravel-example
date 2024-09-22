<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() /*Se usa _invoke cuando es un llamado directo a uno solo como este caso */
    {
       //return "Bienvenido a la pagina principal";
       return view('home');
    }
}

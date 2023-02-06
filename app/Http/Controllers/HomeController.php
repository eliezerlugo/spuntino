<?php

namespace App\Http\Controllers; //define el lugar donde se encuentra el archivo

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
     return view('welcome');
       // return view('home');
    }
}

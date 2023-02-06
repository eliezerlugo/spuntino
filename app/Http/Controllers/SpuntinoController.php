<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpuntinoController extends Controller
{
    public function index(){
        return view('image.index');
    }

    public function create(){
        return view('image.create');
    }

    public function show($img, $categoria=null){

        ////////////////return view('image.show',['categoria'=>$categoria,'img'=>$img]);
        return view('image.show',compact('categoria'),compact('img'));
//        if ($categoria){
//            return "Bienvenido a la página de $img, de la   categoria $categoria";
//        }else{
//            return "Welcome a la galeria de   $img";
//        }
    }
}

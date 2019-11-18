<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;


class HomeController extends Controller
{
    //
    public function viewHome(){
       /*  $usuario = new Usuario();
        $listaUsuarios = $usuario->all(); */
        //dd($listaUsuarios);
       $listaUsuarios = Usuario::all();
        return view('home',["listaUsuarios"=>$listaUsuarios]);
    }
}

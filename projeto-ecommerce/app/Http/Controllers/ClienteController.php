<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];

        return view("cadastrar", $data);
    }

    public function pedidos(Request $request){
        $data = [];

        return view("pedidos", $data);
    }    

}

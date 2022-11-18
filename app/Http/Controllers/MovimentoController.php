<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Conexão com o model Fin_Movimento
use App\Models\Fin_movimento;

class MovimentoController extends Controller
{
    //Método gravar para armazenar o movimento
    public function gravar(Request $request){
        dd($request);
    }
}

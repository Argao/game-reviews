<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeusDadosController extends Controller
{
    public function meusDados()
    {
        return view('site.meus-dados', ['titulo' => 'Meus Dados']);
    }

}

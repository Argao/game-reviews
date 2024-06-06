<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovoJogoController extends Controller
{
    public function novoJogo()
    {
        return view('site.novo-jogo', ['titulo' => 'Cadastro de Jogo']);
    }
}

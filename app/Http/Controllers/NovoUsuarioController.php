<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovoUsuarioController extends Controller
{
    public function novoUsuario()
    {
        return view('site.novo-usuario', ['titulo' => 'Cadastro de Usuário']);
    }
}

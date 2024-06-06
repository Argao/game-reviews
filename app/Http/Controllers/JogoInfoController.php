<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogoInfoController extends Controller
{
    public function jogoInfo()
    {
        return view('site.jogo-info', ['titulo' => 'Jogo Info']);
    }
}

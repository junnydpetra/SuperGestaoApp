<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        var_dump($_POST);
        $title = 'Super Gestão - Contato';
        return view('site.contato', compact('title'));
    }
}

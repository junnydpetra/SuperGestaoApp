<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos()
    {
        $title = 'Super Gestão - Apresentação';
        return view('site.sobre-nos', compact('title'));
    }
}

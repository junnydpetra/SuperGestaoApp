<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        /*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        */
        // var_dump($_POST);

        //$contato = new SiteContato();
        //$contato->nome = $request->input('nome');
        //$contato->telefone = $request->input('telefone');
        //$contato->email = $request->input('email');
        //$contato->motivo_contato = $request->input('motivo_contato');
        //$contato->mensagem = $request->input('mensagem');

        //print_r($contato->getAttributes());
        // $contato->save();

        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();

        print_r($contato->getAttributes());

        $title = 'Super Gestão - Contato';
        return view('site.contato', compact('title'));
    }
}

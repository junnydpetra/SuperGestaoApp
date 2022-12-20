<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 0',
                'status' => 'N',
                'cnpj' => '000.0000/00',
                'ddd' => '41', //Curitiba - PR
                'telefone' => '99847-5685',
            ],
            1 => [
                'nome' => 'Fornecedor 1',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '11', //São Paulo - SP
                'telefone' => '99847-5685',
            ],
            2 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '44', //Campo Mourão - PR
                'telefone' => '99847-5685',
            ],
            3 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz De Fora - MG
                'telefone' => '99847-5685',
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}

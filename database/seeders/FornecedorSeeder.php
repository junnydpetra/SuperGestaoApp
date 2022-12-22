<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "Salvador Dalí";
        $fornecedor->site = 'dalitechy.com';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'dali@dalitechy.com.br';
        $fornecedor->save();

        //utilizando o método create
        // Fornecedor::create([
        //     'nome' => 'Júlio Apucarana',
        //     'site' => 'apucaranatechy.com.br',
        //     'uf' => 'PR',
        //     'email' => 'julio@apucaranatechy.com.br',
        // ]);

        //insert
        // DB::table('fornecedores')->insert([
        //     'nome' => 'Junnyldo Costa',
        //     'site' => 'jmctechy.com.br',
        //     'uf' => 'SC',
        //     'email' => 'junnyldocosta@jmctechy.com.br',
        // ]);
    }
}

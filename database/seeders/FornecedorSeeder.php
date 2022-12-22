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
        $fornecedor->nome = "Junny D'Petra";
        $fornecedor->site = 'dpetratechy.com.br';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'junny@dpetratechy.com.br';
        $fornecedor->save();

        //utilizando o método create
        Fornecedor::create([
            'nome' => 'Júlio Apucarana',
            'site' => 'apucaranatechy.com.br',
            'uf' => 'PR',
            'email' => 'julio@apucaranatechy.com.br',
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Jnnyldo Costa',
            'site' => 'jmctechy.com.br',
            'uf' => 'SC',
            'email' => 'junnyldocosta@jmctechy.com.br',
        ]);
    }
}

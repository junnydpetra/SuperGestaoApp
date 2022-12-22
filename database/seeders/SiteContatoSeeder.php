<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$contato = new SiteContato();
        //$contato->nome = 'Sistema Super Gestão';
        //$contato->telefone = '(41) 99847-5685';
        //$contato->email = 'faleconosco@supergestao.com.br';
        //$contato->motivo_contato = 1;
        //$contato->mensagem = 'Super Gestão';
        //$contato->save();

        SiteContato::factory()->count(100)->create();
    }
}

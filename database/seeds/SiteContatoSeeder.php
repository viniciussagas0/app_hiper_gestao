<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema HG';
        $contato->telefone = '(11) 98456-0246';
        $contato->email = 'contato@hg.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo ao sistema Hiper Gestão';
        $contato->save();
        */
        factory(SiteContato::class, 100)->create();
    }
}

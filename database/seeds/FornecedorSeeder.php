<?php

use Illuminate\Database\Seeder;
use \App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // instanciando
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // O método create (atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome'=> 'fornecedor 200',
            'site'=> 'fornecedor200.com.br',
            'uf'=> 'RS',
            'email'=> 'contato@fornecedor200.com.br'
        ]);

        //INSERT
        DB::table('fornecedores')->insert([
            'nome'=> 'fornecedor 300',
            'site'=> 'fornecedor300.com.br',
            'uf'=> 'BA',
            'email'=> 'contato@fornecedor300.com.br'
        ]);
    }
}

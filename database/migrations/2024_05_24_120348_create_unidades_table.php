<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });
        // adiciona relacionamento com table produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
        // adiciona relacionamento com table produto_detalhes
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // remove relacionamento com table produto_detalhes**********
       Schema::table('produto_detalhes', function (Blueprint $table) {
        //remover foreign key
        $table->dropForeign('produto_detalhes_unidade_id_foreign'); //
        //remover coluna
        $table->dropColumn('unidade_id');
    });

       // remove relacionamento com table produtos**********
       Schema::table('produtos', function (Blueprint $table) {
        //remover foreign key
        $table->dropForeign('produtos_unidade_id_foreign'); //
        //remover coluna
        $table->dropColumn('unidade_id');
    });

        
        Schema::dropIfExists('unidades');
    }
}

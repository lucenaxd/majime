<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFicheiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficheiro', function(Blueprint $ficheiro){
            $ficheiro->increments('id')->index();
            $ficheiro->string('nome');
            $ficheiro->foreign('user_id')->references('id')->on('users')->index();;
            $ficheiro->text('descricao');
            $ficheiro->integer('valor_total')->unsigned();
            $ficheiro->integer('visualizacoes')->default(0);
            $ficheiro->integer('valor_download')->unsigned();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schemea::drop('ficheiro');
    }
}

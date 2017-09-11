<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * a
     */
    public function up()
    {
        Schema::create('tab_noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned()->index();
            $table->string('titulo','200');
            $table->string('subtitulo','200');
            $table->string('descricao','900');
            $table->string('imagem','100');
            $table->enum('status',['ativo','inativo']);
            $table->timestamps();
            
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('tab_noticias');
    }
}

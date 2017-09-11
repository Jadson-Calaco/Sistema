<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabPlanoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * a
     */
    public function up()
    {
       Schema::create('tab_plano', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_plano','200');
            $table->string('valor','10');
            $table->string('quant_questao','10');
            $table->string('quant_mes','10');
            $table->enum('status',['inativo','ativo']);
            $table->timestamps();
        });           

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_plano');
    }
}

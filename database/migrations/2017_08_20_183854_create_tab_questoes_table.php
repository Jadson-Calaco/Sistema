<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * a
     */
    public function up()
    {
        Schema::create('tab_questoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_assunto')->unsigned()->index();
            $table->integer('id_disciplina')->unsigned()->index();
            $table->text('enunciado');
            $table->timestamps();
            
             $table->foreign('id_assunto')->references('id')->on('tab_assunto')->onDelete('cascade');;
             $table->foreign('id_disciplina')->references('id')->on('tab_disciplina')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_questoes');
    }
}

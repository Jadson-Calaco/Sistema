<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabAssuntoTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_assunto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_disciplina')->unsigned()->index();
            $table->string('assunto','250');
            $table->string('serie','10');

            $table->timestamps();
            
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
       Schema::dropIfExists('tab_assunto');
    }
}

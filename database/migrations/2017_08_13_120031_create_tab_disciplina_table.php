<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabDisciplinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * alterado by silvan
     */
    public function up()
    {
       Schema::create('tab_disciplina', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome','50');
            $table->string('carga_horaria','20');
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
        Schema::dropIfExists('tab_disciplina');
    }
}

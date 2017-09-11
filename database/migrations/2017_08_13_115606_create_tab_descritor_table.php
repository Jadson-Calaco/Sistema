<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabDescritorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * alterado by silvan
     */
    public function up()
    {
         Schema::create('tab_descritor', function (Blueprint $table) {
            $table->increments('id_descritor');
            $table->string('serie','10');
            $table->string('nome','20');
            $table->enum('status',['ativo','inativo']);
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
       Schema::dropIfExists('tab_descritor');
    }
}

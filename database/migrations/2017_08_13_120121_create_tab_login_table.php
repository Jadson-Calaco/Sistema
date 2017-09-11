<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * a
     */
    public function up()
    {
      Schema::create('tab_login', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password','30');
            $table->string('email','30');
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
        Schema::dropIfExists('tab_login');
    }
}

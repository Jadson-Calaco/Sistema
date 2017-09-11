<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionalidadesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     * tabela de funcionalidades
     * funcionalidade tipo editar, deletar, atulizar e criar
     */
    public function up() {
        Schema::create('funcionalidades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 200);
            $table->string('descricao', 250);
            $table->enum('status', ['ativo', 'inativo']);

            $table->timestamps();
        });

        Schema::create('funcionalidade_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('funcionalidade_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index(); 

            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');

            $table->foreign('funcionalidade_id')
                  ->references('id')->on('funcionalidades')
                  ->onDelete('cascade');          

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('funcionalidade_user');
        Schema::dropIfExists('funcionalidades');
    }

}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * a
     */
    public function up()
    {
       Schema::create('tab_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plano_id')->unsigned()->index();
            $table->integer('permissao_id')->unsigned()->index();
            $table->string('nome','200');
            $table->string('cpf','15');
            $table->string('sexo','10');
            $table->string('data_nasc','10');
            $table->enum('status',['inativo','ativo']);
            $table->timestamps();

            $table->foreign('plano_id')
                  ->references('id')->on('tab_plano');

            $table->foreign('permissao_id')
                  ->references('id')->on('permissaos');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_usuarios');
    }
}

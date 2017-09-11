<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissaosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     * tabela de permissoes para os tipos de usuarios
     * admin, user comum e etc
     */
    public function up() {
        Schema::create('permissaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 200);
            $table->string('descricao', 250);
            $table->enum('status', ['ativo', 'inativo']);
            $table->timestamps();
        });

        Schema::create('perm_funcio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('funcionalidade_id')->unsigned()->index();
            $table->integer('permissao_id')->unsigned()->index(); 


             $table->foreign('funcionalidade_id')
                  ->references('id')->on('funcionalidades')
                  ->onDelete('cascade');    

             $table->foreign('permissao_id')
                  ->references('id')->on('permissaos')
                  ->onDelete('cascade');    
           
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('perm_funcio');
        Schema::dropIfExists('permissaos');
    }

}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabEnderecoTable extends Migration
{
    
    public function up()
    {
      Schema::create('tab_endereco', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unique()->unsigned()->index();
            $table->string('logradouro','30');
            $table->string('numero','5');
            $table->string('bairro','30');
            $table->string('complemento','30');
            $table->string('cep','15');
            $table->string('cidade','30');
            $table->string('uf','30');
          
            $table->timestamps();

            $table->foreign('usuario_id')
                  ->references('id')->on('tab_usuarios')
                  ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_endereco');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabContatoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * alterado by silvan
     */
    public function up()
    {
      Schema::create('tab_contato_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned()->index();
            $table->string('email','50')->unique();
            $table->string('celular','10');
            $table->string('telefone','10');
            $table->string('obs','200');
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
        Schema::dropIfExists('tab_contato_user');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 200);
            $table->string('icon', 100);
            $table->string('imagem', 100);
            $table->enum('status', ['ativo', 'inativo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sites');
    }

}

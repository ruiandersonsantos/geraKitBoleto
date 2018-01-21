<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->index('idx_telas_codigo');
            $table->string('nome');
            $table->string('titulo');
            $table->string('icone');
            $table->string('descricao');
            $table->string('tabela');
            $table->integer('tipo');
            $table->integer('nivel');
            $table->longText('help');

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
        Schema::dropIfExists('telas');
    }
}

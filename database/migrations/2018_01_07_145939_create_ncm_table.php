<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNcmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ncms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->index('idx_ncms_codigo');
            $table->string('descricao');
            $table->integer('tipo')->default(0);
            $table->integer('user_id')->index('idx_ncms_user_id')->default(0);
            $table->integer('user_id_alter')->index('idx_ncms_user_id_alter')->default(0);
            $table->integer('empresa_id')->index('idx_ncms_empresa_id')->default(0);
            $table->string('tela_id')->index('idx_ncms_tela_id')->default(0);
            $table->integer('origem_id')->index('idx_ncms_origem_id')->default(0);
            $table->string('origem_tela_id')->index('idx_ncms_origem_tela_id')->default(0);
            $table->integer('is_deletado')->default(0)->index('idx_ncms_is_deletado');
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
        Schema::dropIfExists('ncms');
    }
}

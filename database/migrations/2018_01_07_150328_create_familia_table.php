<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo')->index('idx_familias_codigo');
            $table->string('descricao');
            $table->integer('user_id')->index('idx_familias_user_id')->default(0);
            $table->integer('user_id_alter')->index('idx_familias_user_id_alter')->default(0);
            $table->integer('empresa_id')->index('idx_familias_empresa_id')->default(0);
            $table->string('tela_id')->index('idx_familias_tela_id')->default(0);
            $table->integer('origem_id')->index('idx_familias_origem_id')->default(0);
            $table->string('origem_tela_id')->index('idx_familias_origem_tela_id')->default(0);
            $table->integer('is_deletado')->default(0)->index('idx_familias_is_deletado');
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
        Schema::dropIfExists('familias');
    }
}

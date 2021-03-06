<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razao_social');
            $table->string('nome_fantasia');
            $table->string('cnpj')->unique();
            $table->string('endereco');
            $table->string('telefone');
            $table->string('email')->unique();
            $table->integer('user_id')->index('idx_series_user_id')->default(0);
            $table->integer('user_id_alter')->index('idx_series_user_id_alter')->default(0);
            $table->integer('empresa_id')->index('idx_series_empresa_id')->default(0);
            $table->string('tela_id')->index('idx_series_tela_id')->default(0);
            $table->integer('origem_id')->index('idx_series_origem_id')->default(0);
            $table->string('origem_tela_id')->index('idx_series_origem_tela_id')->default(0);
            $table->integer('is_deletado')->default(0)->index('idx_empresas_is_deletado');
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
        Schema::dropIfExists('empresas');
    }
}

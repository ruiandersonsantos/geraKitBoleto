<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_id')->default(0)->index('idx_user_user_id');
            $table->integer('user_id_alter')->index('idx_user_user_id_alter')->default(0);
            $table->integer('empresa_id')->index('idx_user_empresa_id')->default(0);
            $table->string('tela_id')->index('idx_user_tela_id')->default(0);
            $table->integer('origem_id')->index('idx_user_origem_id')->default(0);
            $table->string('origem_tela_id')->index('idx_user_origem_tela_id')->default(0);
            $table->integer('is_deletado')->default(0)->index('idx_users_is_deletado');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

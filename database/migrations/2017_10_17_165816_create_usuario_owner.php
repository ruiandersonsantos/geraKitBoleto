<?php

use App\Model\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioOwner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // criando usuario owner default

        $model = \App\Model\User::create([
            'name' => 'administrator',
            'email' => 'admin@user.com',
            'password' => bcrypt(env('ADMIN_DEFAULT_PASSWORD','secret')),
            'cia_secret' => '123456789',
            'nivel' => \App\Model\User::NIVEL_OWNER,
            'status' => \App\Model\User::STATUS_ATIVO
        ]);


        $model->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table = (new User())->getTable();
        \DB::table($table)
            ->where('email','=','admin@user.com')
            ->delete();
    }
}

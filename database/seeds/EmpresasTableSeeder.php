<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Model\Empresa::class,5)
            ->create()
            ->each(function ($empresa){

                $model = \App\Model\User::create([
                    'name' => $empresa->razao_social,
                    'email' => $empresa->email,
                    'password' => bcrypt(env('ADMIN_DEFAULT_PASSWORD','secret')),
                    'cia_secret' => $empresa->key_secret,
                    'nivel' => \App\Model\User::NIVEL_ADMIN,
                    'status' => \App\Model\User::STATUS_ATIVO
                ]);

                $empresa->save();
                $model->save();

            });
    }
}

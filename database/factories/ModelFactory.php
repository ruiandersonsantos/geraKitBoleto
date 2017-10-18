<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Model\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => 'admin@user.com',
        'cia_secret' => '123456789',
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\Model\Empresa::class, function (Faker\Generator $faker) {
    static $cnpj;

    $cnpj = $faker->numerify('###########');

    return [
        'razao_social' => $faker->company,
        'nome_fantasia' => $faker->companySuffix,
        'cnpj' => $cnpj,
        'endereco' => $faker->address,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'key_secret' => $cnpj . $faker->numerify('###########'),

    ];
});
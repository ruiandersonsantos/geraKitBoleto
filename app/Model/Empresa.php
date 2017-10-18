<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'endereco',
        'telefone',
        'email',
        'key_secret'
    ];


    // metodo para gerar a chave secreta da empresa
    public static function getKeySecret($cnpj,$email){
        $key_secret = $cnpj . '-' . base64_encode($email);

        return $key_secret;
    }

    // metodo para criar usuario master da empresa
    public static function geraUsuarioMaster($empresa){

        $user = [];
        $user['name'] = $empresa['razao_social'];
        $user['email'] = $empresa['email'];
        $user['password'] = bcrypt('secret');
        $user['remember_token'] = str_random(10);
        $user['cia_secret'] = $empresa['key_secret'];
        $user['nivel'] = \App\Model\User::NIVEL_ADMIN;
        $user['status'] = \App\Model\User::STATUS_ATIVO;

        $novouser = \App\Model\User::create($user);

        return $novouser;
    }
}

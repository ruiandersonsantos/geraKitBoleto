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
        'user_id',
        'user_id_alter',
        'empresa_id',
        'tela_id',
        'origem_id',
        'origem_tela_id'
    ];




    /**
     * @param $empresa
     * @return $this|Model
     *
     * metodo para criar usuario master da empresa
     */
    public static function geraUsuarioMaster($empresa){

        $user = [];
        $user['name'] = $empresa['razao_social'];
        $user['email'] = $empresa['email'];
        $user['password'] = bcrypt('secret');
        $user['remember_token'] = str_random(10);
        $user['user_id'] = 0;
        $user['user_id_alter'] = 0;
        $user['empresa_id'] = $empresa['id'];
        $user['tela_id'] = '0';
        $user['origem_id'] = 0;
        $user['origem_tela_id'] = '0';

        $novouser = \App\Model\User::create($user);

        return $novouser;
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarregaInfoTelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $telacfop = \App\Model\Tela::create([

            'codigo' => 'BSC_00001',
            'nome' => 'CFOP',
            'titulo' => 'Cadastro de CFOP',
            'icone' => 'fa fa-save',
            'descricao' => 'Tela de cadastro de CFOP',
            'tabela' => 'cfops',
            'tipo' => \App\Model\Tela::BASICO,
            'nivel' => \App\Model\Tela::NIVEL_1,
            'help' => 'Aqui entrará o objeto com o hel da tela'

        ]);


        $telacfop->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


    }


}

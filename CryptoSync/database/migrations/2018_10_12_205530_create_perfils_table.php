<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users');
            $table->string('nmCompleto', 200);
            $table->char('cpf_cnpj', 20);
            $table->char('rg_ie', 13);
            $table->char('sexo', 1);
            $table->date('dtNasc');
            $table->char('estCivil', 10);
            $table->char('tel', 15);
            $table->string('proficao', 100);
            $table->string('end', 200);
            $table->string('bairro', 200);
            $table->char('cep', 10);
            $table->string('estado', 100);
            $table->string('cidade', 100);
            $table->string('nascionalidade', 100);
            $table->string('imagem', 200)->nullable();

            $table->timestamps();

            // SELECT @@lc_time_names;
            // SET GLOBAL lc_time_names=pt_BR;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
}

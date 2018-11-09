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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ierg');
            $table->string('cpfcnpj');
            $table->string('dtnasc');
            $table->string('sexo');
            $table->string('cep');
            $table->string('endnum');
            $table->string('complemento');
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('profissao');
            $table->string('estadocivil');
            $table->string('nacionalidade');
            $table->string('telefone');
            $table->rememberToken();
            $table->timestamps();
            $table->string('ftperfil')->nullable();

            $table->index([DB::raw('email(191)')]);
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

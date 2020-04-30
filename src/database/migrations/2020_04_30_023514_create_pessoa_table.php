<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_pessoa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 25);
            $table->string('sobrenome', 25)->nullable(true);
            $table->integer('tipo_doc')->nullable(true);
            $table->string('doc', 45)->nullable(true);
            $table->string('email', 45)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_pessoa');
    }
}

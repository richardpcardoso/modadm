<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_telefone', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('adm_pessoa_id');
            $table->integer('ddi');
            $table->integer('ddd');
            $table->string('numero', 12);

            $table->foreign('adm_pessoa_id')->references('id')->on('adm_pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adm_telefone');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_usuario', function (Blueprint $table) {
            $table->bigIncrements('adm_pessoa_id');
            $table->string('senha', 45);
            $table->string('facebook_id', 45)->nullable(true);
            $table->string('google_id', 45)->nullable(true);

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
        Schema::dropIfExists('adm_usuario');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 256);
            $table->char('telefono');
            $table->string('email', 256);
            $table->string('pais', 256);
            $table->string('provincia', 256);
            $table->string('localidad', 256);
            $table->string('empresa', 256);
            $table->mediumText('mensaje');
            $table->enum('status', ['RESP', 'NORESP'])->default('NORESP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}
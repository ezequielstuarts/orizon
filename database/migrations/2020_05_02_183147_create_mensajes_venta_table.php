<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 256);
            $table->char('telefono');
            $table->string('email', 256);
            $table->string('pais', 256);
            $table->string('provincia', 256);
            $table->string('localidad', 256);
            $table->enum('razon', ['Quiero ser distribuidor', 'Consulta', 'Exportación', 'Trabajar en Orizon']);
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
        Schema::dropIfExists('mensajes_venta');
    }
}

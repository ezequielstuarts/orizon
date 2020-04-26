<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title', 128);
            $table->string('slug', 128)->unique();

            $table->mediumText('subtitle')->nulleable();
            $table->mediumText('copete')->nulleable();
            $table->mediumText('contenido')->nulleable();
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');
            $table->string('img', 128)->nulleable();
            
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
        Schema::dropIfExists('notias');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCalzado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calzado', function (Blueprint $table) {
            $table->id();
            $table->string('calzado');
            $table->string('tipo');
            $table->string('color');
            $table->decimal('talla',2,0);
            $table->string('marca');
            $table->string('genero');
            $table->string('edad');
            $table->rememberToken();
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
        Schema::dropIfExists('calzado');
    }
}

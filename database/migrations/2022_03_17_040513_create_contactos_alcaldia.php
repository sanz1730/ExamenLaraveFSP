<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosAlcaldia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos_alcaldia', function (Blueprint $table) {
            $table->id('id_alcaldia');
            $table->string('alcaldia');
            $table->boolean('activo')->default(1)->commet('Si esta activa la alcadia o no');
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
        Schema::dropIfExists('contactos_alcaldia');
    }
}

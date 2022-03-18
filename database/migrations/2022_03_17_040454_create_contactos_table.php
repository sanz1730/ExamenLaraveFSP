<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id('id_contactos')->commet('Identificador Unico');
            $table->string('nombre')->commet('Nombre del contacto');
            $table->string('apellido_paterno')->commet('Apellido Paterno del contacto');
            $table->string('apellido_materno')->commet('Apellido Materno del contacto');
            $table->date('fecha_nacimiento')->commet('Fecha de Nacimiento del contacto');
            $table->string('calle')->commet('Calle del domicilio del contacto');
            $table->string('numero')->commet('Numero del domicilio del contacto');
            $table->string('nombre_asentamiento')->commet('Nombre de asentamiento (colonia) del domicilio del contacto');
            $table->string('codigo_postal')->commet('Codigo postal del domicilio del contacto');
            $table->integer('id_alcaldia')->commet('Alcaldia del domicilio del contacto');
            $table->string('numero_casa',10)->commet('Numero de telefonico del contacto');
            $table->string('numero_celular',10)->commet('Numero celular del contacto');
            $table->boolean('activo')->default(1)->commet('Si esta activo el contacto o no');
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
        Schema::dropIfExists('contactos');
    }
}

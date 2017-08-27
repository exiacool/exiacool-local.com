<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropiedadesRespaldoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propiedades_respaldo', function(Blueprint $table)
		{
			$table->integer('id_propiedades', true);
			$table->integer('id_usuario')->nullable();
			$table->string('titulo', 50);
			$table->string('suject', 50);
			$table->string('frase_propiedad', 130);
			$table->string('full_descripcion', 1024);
			$table->string('keyword', 500);
			$table->string('descripcion_pagina', 500);
			$table->dateTime('fecha_inicio');
			$table->dateTime('fecha_vencimiento');
			$table->integer('prioridad');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('propiedades_respaldo');
	}

}

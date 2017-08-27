<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agentes', function(Blueprint $table)
		{
			$table->integer('id_agentes')->primary();
			$table->string('nombre', 50);
			$table->string('apellidos', 50)->nullable();
			$table->string('direccion', 100)->nullable();
			$table->string('telefono', 25);
			$table->string('correo', 50);
			$table->string('tipo_usuario', 10);
			$table->string('lugar_designado', 50)->nullable();
			$table->string('url_foto', 50)->nullable();
			$table->string('estado', 10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agentes');
	}

}

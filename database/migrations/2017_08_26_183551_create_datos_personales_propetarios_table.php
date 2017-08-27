<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosPersonalesPropetariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datos_personales_propetarios', function(Blueprint $table)
		{
			$table->integer('id_propiedad')->primary();
			$table->string('nombre', 50);
			$table->string('cedula', 50);
			$table->string('direccion', 50)->nullable();
			$table->string('correo', 50);
			$table->string('telefono', 20);
			$table->string('url_documentos', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('datos_personales_propetarios');
	}

}

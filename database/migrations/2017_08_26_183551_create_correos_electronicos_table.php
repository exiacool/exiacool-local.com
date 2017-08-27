<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCorreosElectronicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('correos_electronicos', function(Blueprint $table)
		{
			$table->integer('id_request', true);
			$table->integer('id_propiedad')->index('FK_correos_propiedades_idx');
			$table->string('correo_usuario', 50);
			$table->string('correo_usuario_opcional', 50)->nullable();
			$table->string('nombre_usuario', 50);
			$table->string('apellidos_usuario', 50)->nullable();
			$table->string('telefono_usuario', 20)->nullable();
			$table->string('detalle_usuario', 1024)->nullable();
			$table->dateTime('fecha_inicio')->nullable();
			$table->primary(['id_request','id_propiedad']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('correos_electronicos');
	}

}

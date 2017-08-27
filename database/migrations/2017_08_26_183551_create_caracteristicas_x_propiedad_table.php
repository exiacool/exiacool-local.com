<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaracteristicasXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('caracteristicas_x_propiedad', function(Blueprint $table)
		{
			$table->integer('id_caracteristica');
			$table->integer('id_propiedad')->index('FK_caracteristica_x_propiedad_idx');
			$table->string('cantidad', 10);
			$table->primary(['id_caracteristica','id_propiedad']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('caracteristicas_x_propiedad');
	}

}

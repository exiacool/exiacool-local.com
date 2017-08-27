<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropiedadXTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propiedad_x_tipo', function(Blueprint $table)
		{
			$table->integer('id_tipo');
			$table->integer('id_propiedad')->index('FK_tipos_propiedad_propiedades_idx');
			$table->primary(['id_tipo','id_propiedad']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('propiedad_x_tipo');
	}

}

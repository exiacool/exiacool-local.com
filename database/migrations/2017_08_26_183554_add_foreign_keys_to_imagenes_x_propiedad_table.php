<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToImagenesXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('imagenes_x_propiedad', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_imagenes_propiedades')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('imagenes_x_propiedad', function(Blueprint $table)
		{
			$table->dropForeign('FK_imagenes_propiedades');
		});
	}

}

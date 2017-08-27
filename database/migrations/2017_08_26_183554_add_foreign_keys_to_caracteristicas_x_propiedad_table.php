<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCaracteristicasXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('caracteristicas_x_propiedad', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_caracteristica_x_propiedad')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_caracteristica', 'FK_id_caracteristica')->references('id_caracteristicas')->on('caracteristicas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('caracteristicas_x_propiedad', function(Blueprint $table)
		{
			$table->dropForeign('FK_caracteristica_x_propiedad');
			$table->dropForeign('FK_id_caracteristica');
		});
	}

}

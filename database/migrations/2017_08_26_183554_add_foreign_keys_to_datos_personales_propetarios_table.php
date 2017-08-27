<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDatosPersonalesPropetariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('datos_personales_propetarios', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_propetario_propiedad')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('datos_personales_propetarios', function(Blueprint $table)
		{
			$table->dropForeign('FK_propetario_propiedad');
		});
	}

}

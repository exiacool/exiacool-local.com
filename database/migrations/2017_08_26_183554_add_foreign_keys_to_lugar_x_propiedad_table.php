<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLugarXPropiedadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lugar_x_propiedad', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_id_propiedad')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_lugar_x_propiedad', 'FK_lugar_x_propiedad')->references('id_lugar')->on('lugares')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lugar_x_propiedad', function(Blueprint $table)
		{
			$table->dropForeign('FK_id_propiedad');
			$table->dropForeign('FK_lugar_x_propiedad');
		});
	}

}

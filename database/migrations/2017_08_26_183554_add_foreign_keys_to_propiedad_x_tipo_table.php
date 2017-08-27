<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropiedadXTipoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('propiedad_x_tipo', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_tipos_propiedad_propiedades')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_tipo', 'FK_tipos_propiedad_tipo')->references('id_tipo_propiedad')->on('tipo_propiedad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('propiedad_x_tipo', function(Blueprint $table)
		{
			$table->dropForeign('FK_tipos_propiedad_propiedades');
			$table->dropForeign('FK_tipos_propiedad_tipo');
		});
	}

}

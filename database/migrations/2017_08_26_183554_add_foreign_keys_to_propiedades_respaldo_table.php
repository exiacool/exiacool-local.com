<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropiedadesRespaldoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('propiedades_respaldo', function(Blueprint $table)
		{
			$table->foreign('id_propiedades', 'FK_respaldo_propiedad')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('propiedades_respaldo', function(Blueprint $table)
		{
			$table->dropForeign('FK_respaldo_propiedad');
		});
	}

}

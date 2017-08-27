<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPropiedadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('propiedades', function(Blueprint $table)
		{
			$table->foreign('id_usuario', 'FK_propiedades_agente')->references('id_agentes')->on('agentes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('propiedades', function(Blueprint $table)
		{
			$table->dropForeign('FK_propiedades_agente');
		});
	}

}

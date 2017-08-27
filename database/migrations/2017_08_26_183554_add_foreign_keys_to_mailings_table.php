<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMailingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mailings', function(Blueprint $table)
		{
			$table->foreign('id_propiedad', 'FK_mailing_propiedad')->references('id_propiedades')->on('propiedades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mailings', function(Blueprint $table)
		{
			$table->dropForeign('FK_mailing_propiedad');
		});
	}

}

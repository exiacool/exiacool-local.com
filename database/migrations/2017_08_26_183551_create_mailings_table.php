<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMailingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mailings', function(Blueprint $table)
		{
			$table->integer('id_mailing', true);
			$table->integer('id_propiedad')->index('FK_mailing_propiedad_idx');
			$table->string('subject', 100);
			$table->string('tipo', 50)->nullable();
			$table->string('greeting', 130);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mailings');
	}

}

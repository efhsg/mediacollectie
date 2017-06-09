<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOndertitelingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ondertiteling', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('bestand');
			$table->string('taal', 2);
			$table->string('soort', 3)->nullable();
			$table->unique(['bestand','taal','soort'], 'idx_ondertiteling');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ondertiteling');
	}

}

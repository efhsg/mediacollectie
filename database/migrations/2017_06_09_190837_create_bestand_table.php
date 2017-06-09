<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBestandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bestand', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('naam', 200);
			$table->string('bestandstype')->nullable()->index('bestandstype');
			$table->integer('directory')->nullable();
			$table->string('schijf', 64)->nullable()->index('schijf');
			$table->integer('grootte')->nullable();
			$table->unique(['naam','schijf','directory','bestandstype'], 'idx_bestand');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bestand');
	}

}

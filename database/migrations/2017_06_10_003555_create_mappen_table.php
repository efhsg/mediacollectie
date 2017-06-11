<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMappenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mappen', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->string('naam', 400)->unique('idx_map_naam');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mappen');
	}

}

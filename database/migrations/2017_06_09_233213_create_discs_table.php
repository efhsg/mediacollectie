<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDiscsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('discs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->timestamps();
			$table->string('naam', 64)->unique('idx_schijf_naam');
			$table->integer('capaciteit')->nullable();
			$table->integer('beschikbaar')->nullable();
			$table->date('scandatum')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('discs');
	}

}

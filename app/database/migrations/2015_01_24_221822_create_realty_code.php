<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealtyCode extends Migration 
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realty_code', function(Blueprint $table)
		{
			$table->increments('realty_codeid');
			$table->integer('base_code')->nullable();
			$table->integer('code');
			$table->string('name');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('realty_code');
	}
}

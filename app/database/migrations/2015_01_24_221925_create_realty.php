<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealty extends Migration 
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realty', function(Blueprint $table)
		{
			$table->increments('realtyid');
			$table->integer('realty_codeid')->unsigned()->references('realty_code')->on('realty_codeid')->index();
			$table->string('name');
			$table->decimal('price', 8, 2);
			$table->decimal('assessment_value', 8, 2)->nullable();
			$table->decimal('fire_insurance_value', 8, 2)->nullable();
			$table->string('location');
			$table->string('description');
			$table->integer('realtorid')->unsigned()->references('realtorid')->on('realtor');

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
		Schema::drop('realty');
	}
}

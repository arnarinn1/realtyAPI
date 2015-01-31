<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealtyProperties extends Migration 
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('realty_property', function(Blueprint $table)
		{
			$table->increments('realty_propertyid');
			$table->integer('realtyid')->unsigned()->references('realtyid')->on('realty')->index();
			$table->integer('type_numberid')->unsigned()->references('type_number')->on('type_item');
			$table->string('value');

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
		Schema::drop('realty_property');
	}
}

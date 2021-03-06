<?php


class RealtyPropertySeeder extends Seeder 
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('realty_property')->delete();

		RealtyProperty::create(array('realtyid' => '1', 
								     'type_numberid' => '10',
								     'value' => '5'));

		RealtyProperty::create(array('realtyid' => '1', 
								     'type_numberid' => '20',
								     'value' => '2'));

		RealtyProperty::create(array('realtyid' => '1', 
								     'type_numberid' => '30',
								     'value' => 'Já'));
  	}
}
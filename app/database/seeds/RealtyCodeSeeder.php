<?php


class RealtyCodeSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('realty_code')->delete();

		RealtyCode::create(array('code' => '100', 
							   	 'name' => 'Höfuðborgarsvæðið'));

		RealtyCode::create(array('base_code' => '100', 
								 'code' => '101',
							   	 'name' => 'Reykjavík'));
	}
}
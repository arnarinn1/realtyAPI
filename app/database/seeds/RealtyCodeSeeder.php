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

		RealtyCode::create(array('code' => '1', 
							   	 'name' => 'Höfuðborgarsvæðið'));

		RealtyCode::create(array('base_code' => '1', 
								 'code' => '101',
							   	 'name' => 'Reykjavík'));

		RealtyCode::create(array('base_code' => '1', 
								 'code' => '170',
							   	 'name' => 'Seltjarnarnes'));

		RealtyCode::create(array('base_code' => '1', 
								 'code' => '200',
							   	 'name' => 'Kópavogur'));

		RealtyCode::create(array('base_code' => '1', 
								 'code' => '210',
							   	 'name' => 'Garðabær'));

		RealtyCode::create(array('base_code' => '1', 
								 'code' => '225',
							   	 'name' => 'Álftanes'));

		RealtyCode::create(array('base_code' => '1', 
								 'code' => '220',
							   	 'name' => 'Hafnarfjörður'));

		RealtyCode::create(array('base_code' => '1', 
								 'code' => '270',
							   	 'name' => 'Mosfellsbær'));


		RealtyCode::create(array('code' => '2',
							   	 'name' => 'Norðurland'));

		RealtyCode::create(array('base_code' => '2', 
								 'code' => '603',
							   	 'name' => 'Akureyri'));

		RealtyCode::create(array('base_code' => '2', 
								 'code' => '620',
							   	 'name' => 'Dalvík'));
	}
}
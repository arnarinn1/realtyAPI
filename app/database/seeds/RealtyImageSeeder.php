<?php


class RealtyImageSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('realty_image')->delete();

		RealtyImage::create(array('realtyid' => '1', 
								  'url' => 'http://www.mbl.is/fasteignir/img/pool/f4/f44f02eaafc50d444adf1f03b1ced4f6271ad87b.jpg'));

		RealtyImage::create(array('realtyid' => '1', 
								  'url' => 'http://www.mbl.is/fasteignir/img/pool/b2/b2fa7f1ed7f628f8099c70578ac3461df9f0c8c3.jpg'));
	}
}
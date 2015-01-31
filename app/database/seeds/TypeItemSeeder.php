<?php


class TypeItemSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('type_item')->delete();

		TypeItem::create(array('type_itemid' => '10', 
							   'type_name' => 'Herbergi'));
	}
}
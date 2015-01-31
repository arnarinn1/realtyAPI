<?php

class TypeItem extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'type_item';

	/**
	 * The primary key of the model
	 *
	 * @var string
	 */
	protected $primaryKey = 'type_itemid';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('created_at', 'updated_at');

	/**
	 * The attributes that can be mass assigned.
	 *
	 * @var string
	 */
	protected $fillable = array('type_itemid', 'type_name');
}
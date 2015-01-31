<?php

class RealtyProperty extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'realty_property';

	/**
	 * The primary key of the model
	 *
	 * @var string
	 */
	protected $primaryKey = 'realty_propertyid';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

	/**
	 * The attributes that can be mass assigned.
	 *
	 * @var string
	 */
	protected $fillable = array('realtyid', 
								'type_numberid', 
								'value');

	/**
	 * Relations
	 * - hasMany("className", foreignKey, localKey)
	 * - belongsTo("className", localKey, foreignKey)
	 */

	public function typeItem()
	{
		return $this->belongsTo('TypeItem', 'type_numberid', 'type_itemid');
	}
}
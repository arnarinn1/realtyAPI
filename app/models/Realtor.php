<?php

class Realtor extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'realtor';

	/**
	 * The primary key of the model
	 *
	 * @var string
	 */
	protected $primaryKey = 'realtorid';

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
	protected $fillable = array('name', 'realtor_image');

	/**
	 * Relations
	 * - hasMany("className", foreignKey, localKey)
	 */

	public function realtyImage()
	{
		return $this->belongsTo('RealtyImage', 'realty_imageid', 'realty_imageid');
	}
}
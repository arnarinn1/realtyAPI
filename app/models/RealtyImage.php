<?php

class RealtyImage extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'realty_image';

	/**
	 * The primary key of the model
	 *
	 * @var string
	 */
	protected $primaryKey = 'realty_imageid';

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
	protected $fillable = array('realtyid', 'url');
}
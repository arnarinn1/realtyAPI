<?php

class Realty extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'realty';

	/**
	 * The primary key of the model
	 *
	 * @var string
	 */
	protected $primaryKey = 'realtyid';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('realty_codeid', 'realtorid');

	/**
	 * The attributes that can be mass assigned.
	 *
	 * @var string
	 */
	protected $fillable = array('realty_codeid', 
								'name', 
								'price', 
								'assessment_value', 
								'fire_insurance_value', 
								'location', 
								'description', 
								'realtorid');

	/**
	 * Relations
	 * - hasMany("className", foreignKey, localKey)
	 */

	public function realtyCode()
	{
		return $this->belongsTo('RealtyCode', 'realty_codeid', 'realty_codeid');
	}

	public function realtor()
	{
		return $this->belongsTo('Realtor', 'realtorid', 'realtorid');
	}

	/**
	 * Relations
	 * - belongsTo("className", localKey, foreignKey)
	 */

	public function properties()
	{
		return $this->hasMany('RealtyProperty', 'realtyid');
	}

	public function images()
	{
		return $this->hasMany('RealtyImage', 'realtyid');
	}
}
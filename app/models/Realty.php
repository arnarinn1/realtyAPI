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
	 * - hasMany("className", foreignKey)
	 */

	public function properties()
	{
		return $this->hasMany('RealtyProperty', 'realtyid');
	}

	public function images()
	{
		return $this->hasMany('RealtyImage', 'realtyid');
	}

	/**
	* Scope Specifications
	*/

	public function scopeByPrice($query, $lower, $upper)
    {
        return $query->where('price', '>=', $lower)->where('price', '<=', $upper);
    }

    public function scopeByRealtor($query, $realtorId)
    {
    	if ($realtorId == null) return;

    	return $query->whereHas('realtor', function($q) use($realtorId)
			    {
			      $q->where('realtorid', $realtorId);
			    });
    }

    public function scopeByRealtyCode($query, $realtyCodes)
    {
    	if ($realtyCodes == null) return;

    	return $query->whereHas('realtyCode', function($q) use($realtyCodes)
			    {
			      $q->whereIn('realty_codeid', $realtyCodes);
			    });
    }

    public function scopeByProperties($query, $properties)
    {
		foreach ($properties as $property)
		{
			$query->whereHas('properties', function($q) use($property)
			{
				$q->where('type_numberid', $property['type_numberid'])
			      ->where('value', $property['value']);
			});
		}
    }
}
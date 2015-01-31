<?php

use src\Repository\Interfaces\IRealtyPropertyRepository as RealtyProperty;

class RealtyPropertyController extends BaseController 
{
	public function __construct(RealtyProperty $realtyProperty)
	{
	  $this->realtyProperty = $realtyProperty;
	}

    public function QueryRealtyProperties()
    {
		return Response::json($this->realtyProperty->All());
    }

    public function QueryRealtyProperty($realtyPropertyId)
    {
    	$property = $this->realtyProperty->Find($realtyPropertyId);
    	return Response::json($property);
    }
}
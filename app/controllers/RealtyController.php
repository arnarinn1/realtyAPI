<?php

use src\Repository\Interfaces\IRealtyRepository as Realty;

class RealtyController extends BaseController 
{
	public function __construct(Realty $realty)
	{
	  $this->realty = $realty;
	}

    public function QueryRealties()
    {
		return Response::json($this->realty->All());
    }

    public function QueryRealty($realtyId)
    {
    	$realty = $this->realty->Find($realtyId);
    	return Response::json($realty);
    }
}
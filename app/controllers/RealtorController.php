<?php

use src\Repository\Interfaces\IRealtorRepository as Realtor;

class RealtorController extends BaseController 
{
	public function __construct(Realtor $realtor)
	{
	  $this->realtor = $realtor;
	}

    public function QueryRealtors()
    {
		return Response::json($this->realtor->All());
    }

    public function QueryRealtor($realtorId)
    {
    	$realtor = $this->realtor->Find($realtorId);
    	return Response::json($realtor);
    }
}
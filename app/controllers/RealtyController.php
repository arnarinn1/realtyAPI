<?php

use src\Repository\Interfaces\IRealtyRepository as Realty;
use src\Repository\Interfaces\IRealtyImageRepository as RealtyImage;
use src\Repository\Interfaces\IRealtyPropertyRepository as RealtyProperty;

use src\Contracts\RealtyFilter;

class RealtyController extends BaseController 
{
	public function __construct(Realty $realty, RealtyImage $realtyImage, RealtyProperty $realtyProperty)
	{
	  $this->realty = $realty;
      $this->realtyImage = $realtyImage;
      $this->realtyProperty = $realtyProperty;
	}

    public function QueryRealties()
    {
		return Response::json($this->realty->All());
    }

    public function Query()
    {
        $filter = new RealtyFilter(Input::get('lower_price'), 
                                   Input::get('upper_price'), 
                                   Input::get('realtor'), 
                                   Input::get('realtyCodes'));
        
        return Response::json($this->realty->Query($filter));
    }

    public function QueryRealty($realtyId)
    {
    	$realty = $this->realty->Find($realtyId);
    	return Response::json($realty);
    }

    public function DeleteRealty($id)
    {
        $this->realty->Delete($id);
    }

    public function SaveRealty()
    {
        //Assert Some stöff
        
        $id = Input::get('realtyid');

        if ($id != null)
            return $this->UpdateRealty($id);

        $realty = $this->realty->Create(Input::get());

        foreach(Input::get('images') as $image)
            $this->realtyImage->Create(array('realtyid' => $realty->realtyid, 'url' => $image['url']));

        foreach(Input::get('properties') as $property)
            $this->realtyProperty->Create(array('realtyid' => $realty->realtyid, 
                                                'type_numberid' => $property['type_numberid'],
                                                'value' => $property['value']));

        return $this->GetRealty($realty->realtyid);
    }
    
    #region Private

    private function UpdateRealty($realtyId)
    {
        $clientRealty = $this->realty->Find($realtyId);

        if (Input::has('name'))
            $clientRealty->name = Input::get('name');

        if (Input::has('price'))
            $clientRealty->price = Input::get('price');

        if (Input::has('assessment_value'))
            $clientRealty->assessment_value = Input::get('assessment_value');

        if (Input::has('fire_insurance_value'))
            $clientRealty->fire_insurance_value = Input::get('fire_insurance_value');

        if (Input::has('location'))
            $clientRealty->location = Input::get('location');

        if (Input::has('description'))
            $clientRealty->description = Input::get('description');

        if (Input::has('realty_codeid'))
            $clientRealty->realty_codeid = Input::get('realty_codeid');

        $clientRealty->Save();

        return $this->GetRealty($realtyId);
    }

    private function GetRealty($realtyId)
    {
        return Response::json($this->realty->Find($realtyId));
    }

    private function AssertInput()
    {

    }

    #endregion Private
}
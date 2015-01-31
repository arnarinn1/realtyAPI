<?php

use src\Repository\Interfaces\IRealtyCodeRepository as RealtyCode;

class RealtyCodeController extends BaseController 
{
	public function __construct(RealtyCode $realtyCode)
	{
	  $this->realtyCode = $realtyCode;
	}

    public function QueryRealtyCodes()
    {
		return Response::json($this->realtyCode->All());
    }

    public function QueryRealtyCode($realtyCodeId)
    {
    	$realtyCode = $this->realtyCode->Find($realtyCodeId);
    	return Response::json($realtyCode);
    }

    public function SaveRealtyCode()
    {
        //if ($this->AssertInput($name, $code)) return;

        $id = Input::get('realty_codeid');

        if ($id != null)
            return $this->UpdateRealtyCode();

        $realtyCode = $this->realtyCode->Create(Input::get());
        return Response::json($realtyCode);
    }

    #Region Private

    private function UpdateRealtyCode()
    {
        $code = $this->realtyCode->Find(Input::get('realty_codeid'));

        if (Input::has('code'))
            $code->code = Input::get('code');

        if (Input::has('name'))
            $code->name = Input::get('name');

        $code->Save();

        return Response::json($this->realtyCode->Find(Input::get('realty_codeid')));
    }

    private function AssertInput($name, $code)
    {
        if ($name == null || $code == null) 
            return false;

        return true;
    }
}
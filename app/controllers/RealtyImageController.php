<?php

use src\Repository\Interfaces\IRealtyImageRepository as RealtyImage;

class RealtyImageController extends BaseController 
{
	public function __construct(RealtyImage $realtyImage)
	{
	  $this->realtyImage = $realtyImage;
	}

    public function QueryRealtyImages()
    {
		return Response::json($this->realtyImage->All());
    }

    public function QueryRealtyImage($realtyImageId)
    {
    	$image = $this->realtyImage->Find($realtyImageId);
    	return Response::json($image);
    }
}
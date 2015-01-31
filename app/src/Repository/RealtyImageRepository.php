<?php namespace src\Repository;
 
 use RealtyImage;
 use src\Repository\Interfaces as I;

class RealtyImageRepository implements I\IRealtyImageRepository
{ 
  public function All()
  {
    return RealtyImage::all();
  }
 
  public function Find($id)
  {
    return RealtyImage::find($id);
  }
 
  public function Create($input)
  {
    return RealtyImage::create($input);
  }
}
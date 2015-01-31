<?php namespace src\Repository;
 
 use Realty;
 use src\Repository\Interfaces as I;

class RealtyRepository implements I\IRealtyRepository
{ 
  public function All()
  {
    return Realty::with('realtyCode', 'realtor.realtyImage', 'images', 'properties.typeItem')
                 ->get();
  }
 
  public function Find($id)
  {
    return Realty::with('realtyCode', 'realtor', 'images')
                 ->find($id);
  }
 
  public function Create($input)
  {
    return Realty::create($input);
  }
}
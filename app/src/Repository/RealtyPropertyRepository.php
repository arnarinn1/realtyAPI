<?php namespace src\Repository;
 
 use RealtyProperty;
 use src\Repository\Interfaces as I;

class RealtyPropertyRepository implements I\IRealtyPropertyRepository
{ 
  public function All()
  {
    return RealtyProperty::with('typeItem')
                         ->get();
  }
 
  public function Find($id)
  {
    return RealtyProperty::with('typeItem')->find($id);
  }
 
  public function Create($input)
  {
    return RealtyProperty::create($input);
  }
}
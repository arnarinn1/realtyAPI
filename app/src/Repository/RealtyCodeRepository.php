<?php namespace src\Repository;
 
 use RealtyCode;
 use src\Repository\Interfaces as I;

class RealtyCodeRepository implements I\IRealtyCodeRepository
{ 
  public function All()
  {
    return RealtyCode::all();
  }
 
  public function Find($id)
  {
    return RealtyCode::find($id);
  }
 
  public function Create($input)
  {
    return RealtyCode::create($input);
  }

  public function Delete($id)
  {
    $realtyCode = $this->Find($id);
    $realtyCode->delete();
  }
}
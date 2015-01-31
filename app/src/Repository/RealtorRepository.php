<?php namespace src\Repository;
 
 use Realtor;
 use src\Repository\Interfaces as I;

class RealtorRepository implements I\IRealtorRepository
{ 
  public function All()
  {
    return Realtor::with('realtyImage')
                  ->get();
  }
 
  public function Find($id)
  {
    return Realtor::with('realtyImage')
                  ->find($id);
  }
 
  public function Create($input)
  {
    return Realtor::create($input);
  }
}
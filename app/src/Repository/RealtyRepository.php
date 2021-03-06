<?php namespace src\Repository;
 
 use Realty;
 use src\Repository\Interfaces as I;

class RealtyRepository implements I\IRealtyRepository
{ 
  public function All()
  {
    return Realty::with('realtyCode', 'realtor', 'images', 'properties.typeItem')
                 ->get();
  }

  public function Query($filter)
  {
    $query = Realty::with('realtyCode', 'realtor', 'images', 'properties.typeItem');

    //Always filter by price
    $query->ByPrice($filter->lowerPrice(), $filter->upperPrice());

    //Possibly filter by the realtor
    $query->ByRealtor($filter->realtorId());

    //Possibly filter the realtyCode
    $query->ByRealtyCode($filter->realtyCodeIds());

    //Possibly filter by realtyTypes
    $query->ByRealtyTypes($filter->realtyTypes());

    //Possibly filter by room numbers
    $query->ByRoomNumbers($filter->lowerRoomNumber(), $filter->upperRoomNumber());

    return $query->get();
  }
 
  public function Find($id)
  {
    return Realty::with('realtyCode', 'realtor', 'images', 'properties.typeItem')
                 ->find($id);
  }
 
  public function Create($input)
  {
    return Realty::create($input);
  }

  public function Delete($id)
  {
    $realty = $this->Find($id);
    $realty->delete();
  }
}
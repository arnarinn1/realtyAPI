<?php namespace src\Repository;
 
 use TypeItem;
 use src\Repository\Interfaces as I;

class TypeItemRepository implements I\ITypeItemRepository
{ 
  public function All()
  {
    return TypeItem::all();
  }
 
  public function Find($id)
  {
    return TypeItem::find($id);
  }
 
  public function Create($input)
  {
    return TypeItem::create($input);
  }
}
<?php namespace src\Repository\Interfaces;
 
interface ITypeItemRepository 
{   
  public function All();
 
  public function Find($id);
 
  public function Create($input);
}
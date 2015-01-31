<?php namespace src\Repository\Interfaces;
 
interface IRealtyPropertyRepository 
{   
  public function All();
 
  public function Find($id);
 
  public function Create($input);
}
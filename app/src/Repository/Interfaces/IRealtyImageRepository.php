<?php namespace src\Repository\Interfaces;
 
interface IRealtyImageRepository 
{   
  public function All();
 
  public function Find($id);
 
  public function Create($input);
}
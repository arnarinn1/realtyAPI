<?php namespace src\Repository\Interfaces;
 
interface IRealtyCodeRepository 
{   
  public function All();
 
  public function Find($id);
 
  public function Create($input);
}
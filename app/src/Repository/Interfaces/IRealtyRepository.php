<?php namespace src\Repository\Interfaces;
 
interface IRealtyRepository 
{   
  public function All();

  public function Query($filter);
 
  public function Find($id);
 
  public function Create($input);

  public function Delete($id);
}
<?php namespace src\Repository\Interfaces;
 
interface IRealtorRepository 
{   
  public function All();
 
  public function Find($id);
 
  public function Create($input);
}
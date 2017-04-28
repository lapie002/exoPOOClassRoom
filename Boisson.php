<?php

/* classe Boisson */
class Boisson
{
  // protected : Uniquement modifiable par cette classe et celle qui en hérite
  protected $_brand;
  protected $_color;

  // modifiable et accessible de partout
  public $_ingredients;
  // private : uniquement modifiable par cette classe
  private $_prix;


  public function __construct($_brand,$_color,$_ingredients)
  {
    $this->_brand = $_brand;
    $this->_color = $_color;
    $this->_ingredients = $_ingredients;
  }

  public function setPrix($p)
  {
    $this->_prix = $p;
  }

  public function getPrix()
  {
    return $this->_prix;
  }

  public function getBrand()
  {
    return $this->_brand;
  }

}

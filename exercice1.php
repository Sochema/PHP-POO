<?php
// EXERCICE 1
class City{

  private $_name = "Lille";
  private $_department = "Nord";

  public function showCity(){
  echo "La ville ". $this->_name ." est dans le département ". $this->_department;
  }
}

$myCity = new City;
$myCity->showCity();












?>

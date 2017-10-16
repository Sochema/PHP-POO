<?php
// EXERCICE 2
class City{

  private $_name;
  private $_department;

  //CONSTRUCTEUR

  public function __construct($name, $department){
    $this->setName($name);
    $this->setDepartment($department);
  }

// GETTERS

  public function name(){
  return $this->_name;
  }

  public function department(){
  return $this->_department;
  }

// SETTERS
  public function setName($name){
    if(!is_int($name)){
      $this->_name = $name;
    }
  }

  public function setDepartment($department){
    if(!is_int($department)){
      $this->_department=$department;
    }
  }

  public function showCity(){
  echo "La ville ". $this->name() ." est dans le département ". $this->department();
  }
}

$myCity = new City("Lyon", 3);
// var_dump($myCity);
$myCity->showCity();




?>

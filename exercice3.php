<?php

//EXERCICE 3

class Person {

private $_name;
private $_surname;
private $_adress;

// CONSTRUCTOR
public function __construct($name, $surname, $adress){
  $this->setName($name);
  $this->setSurname($surname);
  $this->setAdress($adress);
}

//DESCTRUCTOR
// public function __destruct(){
//   $this;
// }


// GETTER
  public function getPerson(){
  echo $this->name()."</br>". $this->surname(). "</br>" .$this->adress();
    // var_dump($this->name());
  }

// var_dump(getPerson());

public function name(){
  return $this->_name;
}

public function surname(){
  return $this->_surname;
}

public function adress(){
  return $this->_adress;
}

//SETTERS

  private function setName($name){
    // if(is_string($name)){
    $this->_name = $name;
    // }
  }

  public function setSurname($surname){
    // if(is_string($surname)){
      $this->_surname=$surname;
    // }
  }

  public function setAdress($adress){
    // if(is_string($adress)){
      $this->_adress=$adress;
    // }
  }

  public function showPerson(){
    echo $this->getPerson();
   }
}

$person1= new Person("Sonia", "CH", "rue des blabla");
$person1->setAdress("Nouvelle Adresse");
$person1->showPerson();








 ?>

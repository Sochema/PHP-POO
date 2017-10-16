<?php

// // TEST SUR LES CONSTANTES DE CLASSE
//
// class Personnage {
//
//   private $_force;
//   private $_localisation;
//   private $_experience;
//   private $_degats;
//
//   const FORCE_PETITE = 20;
//
//   // Accès à une constante que avec ::
//
//
// // SETTER
//
// public function setForce($force){
//   if(in_array($force, [self::FORCE_PETITE])){
//     $this->_force=$force;
//   }
// }
//
// // ATTRIBUT ET METHODE STATIQUES
//
// public static function talk(){
//   echo 'parle';
// }
//
// }
//
//
// Personnage::parler();
//
// class TouteBete{
//
// // compter combien il ya d'objet aevc caracteristique objet
// private static $_compteur=0;
//
// public function __construct(){
//   self::$_compteur++;
// }
//
// public static function compteur(){
//   return self::$_compteur;
// }
// }
//
//
// $perso = new TouteBete;
// $perso1 = new TouteBete;
//
// echo TouteBete::compteur();

class Personnage{

private $_experience= 50;

public function afficher(){
  echo $this->_experience;
}

public function experience(){
  echo $this->_experience= $this->_experience+1;
}

public function frapper($persoafrappe){
  $this->_force = $persoafrappe->degat++;


}
}

$perso = new Personnage;


$perso->degat();




 ?>

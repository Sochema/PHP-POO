<?php

class Form{

  private $_form= "<form><fieldset>";
  private $_submit;
  private $_text;


public function __construct(){
 $this->_form;
}

public function setText($text){
  $this->_text="<input type=".$text.">";
}

public function setSubmit($submit){
  $this->_submit="<input type=".$submit.">";
}

public function getText(){
  return $this->_text;
}

public function getSubmit(){
  return $this->_submit;
}

public function getForm(){
  echo $this->_form.$this->getText().$this->getSubmit()."</fieldset></form>";
}

}

$formulaire1 = new Form();
$formulaire1->setText('text');
$formulaire1->setSubmit('submit');
$formulaire1->getForm();
$formulaire2 = new Form();
$formulaire2->setText('text');
$formulaire2->getForm();


 ?>

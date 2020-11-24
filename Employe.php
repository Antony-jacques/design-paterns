<?php

interface Employe
{
  public function getName();
  public function getLastname();
  public function getAge();
  public function getYear();
  


  /*public function __construct($name, $lastname, $age, $year)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->year = $year;
  }
  public function getName()
  {
    return "Employé salarié: '$this->name'";
  }
  abstract function getSalary();*/
}

class Salesman implements Employe
{
  public $ca;
  public $type='salesman';

  public function __construct($name, $lastname, $age, $year, $ca, $type) {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->year = $year;
    $this->type = $type;


  }
  public function getSalary() {
    return ($this->ca * 0.2) + 400;
  }

    /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  public function getLastname()
  {
    return $this->lastname;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getYear()
  {
    return $this->year;
  }

  public function getType()
  {
    return $this->type;
  }


}

class Representant extends Employe
{
  public $ca;

  public function __construct($name, $lastname, $age, $year, $ca) {
    parent::__construct($name, $lastname, $age, $year);
    $this->ca = $ca;
  }
  public function getSalary() {
    return ($this->ca * 0.2) + 800;
  }
}

class Producer extends Employe
{
  public $nbUnits;

  public function __construct($name, $lastname, $age, $year, $nbUnits) {
    parent::__construct($name, $lastname, $age, $year);
    $this->nbUnits = $nbUnits;
  }
  public function getSalary() {
    return $this->nbUnits * 5;
  }
}

class Wharehouseman extends Employe
{
  public $nbHour;

  public function __construct($name, $lastname, $age, $year, $nbHour) {
    parent::__construct($name, $lastname, $age, $year);
    $this->nbHour = $nbHour;
  }
  public function getSalary() {
    return $this->nbHour * 65;
  }
}

class ProducerWithRisk extends Producer
{
  public $nbUnits;
    
  public function getSalary() {
    return parent::getSalary() + 200;
  }
}

class WharehousemanWithRisk extends Wharehouseman
{
  public $nbHour;

  public function getSalary() {
    return parent::getSalary() + 200;
  }


}
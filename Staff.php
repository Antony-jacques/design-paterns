<?php

final class Staff
{
  public $employees;
  private static $instance;

  public function __construct(){}
  
  public function add($employee)
  {
    $this->employees[] = $employee;
  }

  public function displaySalaries()
  {
    foreach($this->employees as $employee) {
      echo $employee->getName() . ' ' . $employee->getSalary() . PHP_EOL;
    }
  }

  public function displayAverageSalary()
  {
    $total = 0;
    foreach ($this->employees as $employee) {
       $total += $employee->getSalary();
    }
    echo 'Salaire moyen: ' .  $total / count($this->employees) . PHP_EOL;
  }
    public static function getInstance(): Staff
    {
      if(!self::$instance){
        self::$instance = new self();
      }
      return self::$instance;
    }
}
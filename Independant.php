<?php
include_once('Employe.php');

class Independant extends Employe
{
  public $siren;
  public $invoices = [];

  public function __construct($name, $lastname, $age, $year, $siren, $invoices)
  {
    parent::__construct($name, $lastname, $age, $year);
    $this->siren = $siren;
    $this->invoices = $invoices;
  }

  public function addInvoice($invoice)
  {
      $this->invoices[] = $invoice;
  }

  public function getName()
  {
    return "Employé indépendant: '$this->name'";
  }

  function getSalary()
  {
    $totalAmount = 0;
    foreach($this->invoices as $invoice) {
      if (strpos("Frais de déplacement -", $invoice->getLabel()) === false) {
        $totalAmount += $invoice->amount;
      }
    }
    return $totalAmount;
  }
}

class InvoiceBuilder
{
  public $date = false;
  public $amount = false;
  public $label = false;

 public function __construct()
 {

 }

 public function addDate($date)
 {
   $this->date = $date;
   return $this;
 }

 public function addAmount($amount)
 {
   $this->amount=$amount;
   return $this;
 }

 public function addLabel($label)
 {
   $this->label=$label;
   return $this;
 }

}



class Invoice
{
  public $date ;
  public $amount;
  public $label ;

  public function __construct(InvoiceBuilder $invoiceBuilder)
  {
    $this->date = $invoiceBuilder->$date;
    $this->amount = $invoiceBuilder->$amount;
    $this->label = $invoiceBuilder->$label;
  }

  /*
  public function __construct($date, $amount, $label)
  {
    $this->date = $date;
    $this->amount = $amount;
    $this->label = $label;
  }
  */

  public function getLabel()
  {
    return $this->label;
  }

  public function getAmount()
  {
    return $this->getAmount;
  }

  public function build():Invoice
  {
      return new Invoice ($this);
  }

}
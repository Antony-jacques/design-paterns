<?php
class InvoiceList implements Countable, Iterator{
    protected $invoices = [];
    protected $counter;

    public function __construct(){}

    public function addInvoice(Invoice $invoice){
        $this->invoice = $invoice;
    }

    public function removeInvoice(Invoice $invoiceToRemove){
        $invoiceLabelToRemove = $invoiceToRemove->getLabel;

    }


    public function count()
    {
        return count($this->stations)
    }

    public function current():RadioStation
    {
        return this->stations[$this->counter];
    }

    public function 
}
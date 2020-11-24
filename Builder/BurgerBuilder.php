<?php
class BurgerBuilder
{
    public $size;

    public $cheese = false;
    public $meat = false;
    public $letuce = false;
    public $tomato = false;

    public function __construct($size)
    {
        $this->size = $size;
        return $this;
    }
    
    public function addCheese($cheese)
    {
        $this->cheese = true;
    }

    public function addLetuce($cheese)
    {
        $this->cheese = true;
    }

    public function addtomato($cheese)
    {
        $this->cheese = true;
    }


    public function build():Burger
    {
        return new Burger($this);
    }


}
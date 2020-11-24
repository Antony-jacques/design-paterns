<?php
class Burger
{
    protected $size;

    protected $cheese = false;
    protected $meat = false;
    protected $letuce = false;
    protected $tomato = false;

    public function __construct(BurgerBuilder $burgeBuilder)
    {
        $this->cheese = $burgeBuilder->cheese;
        $this->size = $burgeBuilder->size;
        $this->meat = $burgeBuilder->meat;
        $this->letuce = $burgeBuilder->letuce;
        $this->tomato = $burgeBuilder->tomato;

    }

}
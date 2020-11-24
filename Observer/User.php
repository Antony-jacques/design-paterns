<?php

class Login
{
    protected $observer = [];

    public function __construct(){}

    public function attach($observers)
    {
        if(is_aray($observers as $observer))
        {
            foreach($observers as $observer)
            {
                if(!$observer instanceof ObserverInterface){
                    throw new Exception();
                }
                $this->attach($observer);
            }
            return;
        }
        $this->observers[] = $observers;
        return ;
    }

    public function detach($index)
    {
        unset($this->observers[$index])
    }
}
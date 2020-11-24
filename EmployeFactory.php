<?php

include_once('Employe.php'); 



class EmployeFactory
{

    public static function create($type, $param = [])
        {
            
        }

    public static function makeEmploye($name, $lastname, $age, $year){

        switch ($type) {
    case 'salesman':
        echo "i es igual a 0";
        break;
    case 1:
        echo "i es igual a 1";
        break;
    case 2:
        echo "i es igual a 2";
        break;
}

    }
}
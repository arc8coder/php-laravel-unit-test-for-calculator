<?php


namespace App\Services;


class Calculator
{
    public function add()
    {
        $args = func_get_args();
        $sum = 0;
        foreach($args as $arg){
            $sum += $arg;
        }

        return $sum;
    }
}

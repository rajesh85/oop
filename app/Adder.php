<?php
namespace App;
class Adder implements OperatorInterface
{
    public function run($number, $result){
        return $number + $result;
    }
}
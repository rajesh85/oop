<?php
namespace App;
class Multiplier implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result * $number;
    }
}

<?php
namespace App;
class Divider implements OperatorInterface
{
    public function run($number, $result)
    {
        return $number / $result;
    }
}
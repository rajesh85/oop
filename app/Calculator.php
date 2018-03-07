<?php
namespace App;

class Calculator
{
    protected $result;
    protected $operation;

    public function setOperation(OperatorInterface $operation)
    {
        $this->operation = $operation;
        //var_dump($operation);
    }

    public function calculate()
    {
        $args = func_get_args();
        //var_dump($args);
        foreach ($args as $number)
        {
              $this->result = $this->operation->run($number, $this->result);
        }
    }

    public function getResult()
    {
        return $this->result;
    }
}
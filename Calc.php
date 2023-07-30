<?php

class Calc{
    public $first;
    public $second;
    public $action;
    private $result;

    public function __construct($first, $second, $action){
        $this->first = $first;
        $this->second = $second;
        $this->action = $action;
    }

    public function toString(){
        echo "\n ___________________________________";
        echo "\n first = ".$this->first;
        echo "\n second = ".$this->second;
        echo "\n ACTI = ".$this->action;
        echo "\n ___________________________________";
    }

    public function procces(){
        echo " process started with action  = ".$this->action;
        switch ($this->action){
            case '+':
            $this->result =  $this->first + $this->second;
            break;
            case '-':
             $this->result =  $this->first - $this->second;
            break;
            case '*':
             $this->result =  $this->first * $this->second;
            break;
            case '/':
             $this->result =  intdiv($this->first, $this->second);
            break;
            default:
            throw new Exception('Unsupported action');
            //break;
            }
 
            echo "\n RESULT = $this->result\n==============================\n";
        return $this->result;
    }

}
    


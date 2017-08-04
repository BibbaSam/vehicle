<?php

abstract class Vehacle implements IVehacle{
   
    protected $speed;
    protected $direction;
    protected $cordinate;
    protected $time;
    
protected function setSpeed($speed){

        $this->speed = $speed;
    }
    
protected function chengePressure($p) {
    
    $rotate = 10;
    
    $this->setSpeed($this->speed += $p * $rotate);
}
}
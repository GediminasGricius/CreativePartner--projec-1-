<?php
namespace App\Classes;

class Employee{
    protected $name;
    protected $salary;
    public function __construct($name, $salary){
        $this->name=$name;
        $this->salary=$salary;
    }
    
    public function name() {
        return $this->name;
    }
    
    public function salary(){
        return $this->salary;
    }
    
    public function gpm(){
        return ($this->salary-Fees::NPD)*Fees::GPM/100;
    }
    
    public function psd(){
        return $this->salary*Fees::PSD/100;
    }
    public function vsd(){
        return $this->salary*Fees::VSD/100;
    }
    
    
    public function netto(){
        return $this->salary-$this->gpm()-$this->psd()-$this->vsd();
    }
    
}
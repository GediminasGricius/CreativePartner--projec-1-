<?php
namespace App\Classes;

class Stuff{
    protected $employees=[];
    
    public function add(Employee $employee){
        $this->employees[]=$employee;
    }
    
    public function employees(){
        return $this->employees;
    }
    
    public function totalSalary(){
        $total=0;
        foreach ($this->employees as $employee){
            $total+=$employee->salary();
        }
        return $total;
    }
    
}
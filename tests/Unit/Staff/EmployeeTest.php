<?php

namespace Tests\Unit\Staff;

use PHPUnit\Framework\TestCase;
use App\Classes\Employee;

class EmployeeTest extends TestCase
{
    public function setUp():void{
        $this->employee=new Employee("Jonas", 1500);
    }
    
    public function test_has_name(){
        
        $this->assertEquals("Jonas", $this->employee->name());
    }
    
    public function test_employee_salary(){
        
        $this->assertEquals(1500, $this->employee->salary());
    }
    
    public function test_employee_netto(){
        $this->assertEquals(959.46, $this->employee->netto());
    }
}

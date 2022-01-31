<?php

namespace Tests\Unit\Staff;

use PHPUnit\Framework\TestCase;
use App\Classes\Stuff;
use App\Classes\Employee;

class StaffTest extends TestCase
{
    public function setUp():void{
        $this->stuff=new Stuff();
        $e1=new Employee("Jonas", 1500);
        $e2=new Employee("Petras", 1200);
        $this->stuff->add($e1);
        $this->stuff->add($e2);
    }
    
    public function test_total_count_of_employees(){
       
        $this->assertCount(2, $this->stuff->employees());
    }
    
    public function test_total_salary(){
        $this->assertEquals(2700, $this->stuff->totalSalary());
    }
    
}

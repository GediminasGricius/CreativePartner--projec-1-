<?php

namespace Tests\Unit\Integrity;

use Tests\TestCase;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeesTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_employee_raiting(){
        $e=Employee::factory()->create(['raiting'=>5]);
        
        $this->assertEquals(5, $e->raiting);
    }
    
    public function test_employee_top_5(){
        Employee::factory()->count(9)->create();
        $top=Employee::factory()->create(['raiting'=>5]);
        Employee::factory()->count(5)->create(['raiting'=>rand(1,4)]);
        
        $employees=Employee::top5();
        
        $this->assertEquals($top->id, $employees->first()->id);
        $this->assertCount(5, $employees);
        
        
    }
    
}

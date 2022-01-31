<?php

namespace Tests\Unit\Integrity;

use Tests\TestCase;
use App\Models\Project;
use App\Models\Employee;

class ProjectTest extends TestCase
{
    
    public function test_project_has_a_name()
    {
        $project=new Project(['name'=>'Alpha']);
        $this->assertEquals('Alpha', $project->name);
    }
    
    public function test_add_user_to_a_project(){
        $project=Project::factory()->create();
        $employee1=Employee::factory()->create();
        $employee2=Employee::factory()->create();
        
        $project->employees()->save($employee1);
        $project->employees()->save($employee2);
        
        
        $this->assertEquals(2, $project->employees()->count());
    }
}

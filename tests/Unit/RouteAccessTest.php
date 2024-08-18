<?php

namespace Tests\Feature;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_can_access_student_index()
    {
        $student = User::factory()->create(['role' => UserRole::Student->value]);

        $response = $this->actingAs($student)->get(route('student.index'));
//        logger('Response Content: ' . $response->getContent());
        logger('Response Headers: ' . json_encode($student->role));

        $response->assertStatus(200);
    }

    public function test_non_student_cannot_access_student_index()
    {
        $nonStudent = User::factory()->create(['role' => 'Lecturer']);

        $response = $this->actingAs($nonStudent)->get(route('student.index'));

        $response->assertStatus(403);
    }

    public function test_supervisor_can_access_supervisor_index()
    {
        $supervisor = User::factory()->create(['role' => UserRole::Lecturer->value]);

        $response = $this->actingAs($supervisor)->get(route('supervisor.index'));
        logger('supervisor Role: ' . $supervisor->role->name);

        $response->assertStatus(200);
    }

    public function test_non_supervisor_cannot_access_supervisor_index()
    {
        $nonSupervisor = User::factory()->create(['role' => 'Student']);

        $response = $this->actingAs($nonSupervisor)->get(route('supervisor.index'));


        $response->assertStatus(403);
    }

    public function test_director_can_access_director_index()
    {
        $director = User::factory()->create(['role' => UserRole::Director->value]);

        $response = $this->actingAs($director)->get(route('director.index'));
        logger('director Role: ' . $director->role->name);

        $response->assertStatus(200);
    }

    public function test_non_director_cannot_access_director_index()
    {
        $nonDirector = User::factory()->create(['role' => 'Student']);

        $response = $this->actingAs($nonDirector)->get(route('director.index'));
        logger('Director Role: ' . $nonDirector->role->name);

        $response->assertStatus(403);
    }

    public function test_coordinator_can_access_coordinator_index()
    {
        $coordinator = User::factory()->create(['role' => UserRole::Coordinator->value]);

        $response = $this->actingAs($coordinator)->get(route('coordinator.index'));
        logger('Coordinator Role: ' . $coordinator->role->name);

        $response->assertStatus(200);
    }

    public function test_non_coordinator_cannot_access_coordinator_index()
    {
        $nonCoordinator = User::factory()->create(['role' => UserRole::Student->value]);

        $response = $this->actingAs($nonCoordinator)->get(route('coordinator.index'));
        logger('User Role: ' . $nonCoordinator->role->name);

        $response->assertStatus(403);
    }
}

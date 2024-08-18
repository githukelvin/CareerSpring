<?php

namespace Tests\Unit;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserPolicyTest extends TestCase
{
    use RefreshDatabase;

    public function testIsCoordinator()
    {
        $policy = app(UserPolicy::class); // Use the service container to resolve UserPolicy

        $user = User::factory()->create(['role' => 'Coordinator']);
        $this->assertTrue($policy->isCoordinator($user));

        $user = User::factory()->create(['role' => 'Student']);
        $this->assertFalse($policy->isCoordinator($user));

        $user = User::factory()->create(['role' => 'Lecturer']);
        $this->assertFalse($policy->isCoordinator($user));

        $user = User::factory()->create(['role' => 'Director']);
        $this->assertFalse($policy->isCoordinator($user));
    }

    public function testIsStudent()
    {
        $policy = app(UserPolicy::class); // Use the service container to resolve UserPolicy

        $user = User::factory()->create(['role' => 'Student']);
        $this->assertTrue($policy->IsStudent($user));

        $user = User::factory()->create(['role' => 'Coordinator']);
        $this->assertFalse($policy->IsStudent($user));

        $user = User::factory()->create(['role' => 'Lecturer']);
        $this->assertFalse($policy->IsStudent($user));

        $user = User::factory()->create(['role' => 'Director']);
        $this->assertFalse($policy->IsStudent($user));
    }

    public function testIsLecturer()
    {
        $policy = app(UserPolicy::class); // Use the service container to resolve UserPolicy

        $user = User::factory()->create(['role' => 'Lecturer']);
        $this->assertTrue($policy->isLecturer($user));

        $user = User::factory()->create(['role' => 'Student']);
        $this->assertFalse($policy->isLecturer($user));

        $user = User::factory()->create(['role' => 'Coordinator']);
        $this->assertFalse($policy->isLecturer($user));

        $user = User::factory()->create(['role' => 'Director']);
        $this->assertFalse($policy->isLecturer($user));
    }

    public function testIsDirector()
    {
        $policy = app(UserPolicy::class); // Use the service container to resolve UserPolicy

        $user = User::factory()->create(['role' => 'Director']);
        $this->assertTrue($policy->isDirector($user));

        $user = User::factory()->create(['role' => 'Student']);
        $this->assertFalse($policy->isDirector($user));

        $user = User::factory()->create(['role' => 'Lecturer']);
        $this->assertFalse($policy->isDirector($user));

        $user = User::factory()->create(['role' => 'Coordinator']);
        $this->assertFalse($policy->isDirector($user));
    }
}

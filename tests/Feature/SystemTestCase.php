<?php

namespace Tests\Feature;

use App\Models\Attachment;
use App\Models\Student;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class SystemTestCase extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user registration.
     *
     * @return void
     */
    public function testUserRegistration()
    {
        $response = $this->post('register', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => 'SecurePass123!',
        ]);

        $response->assertStatus(302); // Redirect after successful registration
        $this->assertDatabaseHas('users', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ]);
    }

    /**
     * Test student profile creation.
     *
     * @return void
     */
    public function testStudentProfileCreation()
    {
        $user = User::factory()->create(['role' => 'Student']);
        $this->actingAs($user);

        $response = $this->post('/student/profile', [
            'admin_no' => 'S12345',
            'gender' => 'Male',
            'id_no' => 'ID98765',
            'dob' => '2000-01-01',
            'course' => 'Computer Science',
            'level' => 'Undergraduate',
            'year' => 3,
            'home_address' => '123 Main St, City',
            'tel_no' => '+1234567890'
        ]);

        $response->assertStatus(302); // Redirect after successful profile creation
        $this->assertDatabaseHas('students', [
            'user_id' => $user->id,
            'admin_no' => 'S12345',
            'course' => 'Computer Science'
        ]);
    }

    /**
     * Test weekly log submission.
     *
     * @return void
     */
    public function testWeeklyLogSubmission()
    {
        $student = Student::factory()->create();
        $this->actingAs($student->user);

        $response = $this->post('/weekly-log', [
            'week_number' => 1,
            'date_from' => '2024-06-01',
            'date_to' => '2024-06-05',
            'monday' => 'Worked on project A',
            'tuesday' => 'Meeting with team',
            'wednesday' => 'Debugged issue X',
            'thursday' => 'Completed feature Y',
            'friday' => 'Code review',
            'student_remarks' => 'Productive week, learned a lot'
        ]);

        $response->assertStatus(302); // Redirect after successful submission
        $this->assertDatabaseHas('weekly_logs', [
            'student_id' => $student->id,
            'week_number' => 1,
            'student_remarks' => 'Productive week, learned a lot'
        ]);
    }

    /**
     * Test lecturer assessment submission.
     *
     * @return void
     */
    public function testLecturerAssessmentSubmission()
    {
        $lecturer = User::factory()->create(['role' => 'Lecturer']);
        $student = Student::factory()->create();
        $this->actingAs($lecturer);

        $response = $this->post('/assessment', [
            'student_id' => $student->id,
            'day_assessed' => '2024-06-10',
            'feedback' => 'Good progress, needs improvement in time management',
            'performance' => 4
        ]);

        $response->assertStatus(302); // Redirect after successful submission
        $this->assertDatabaseHas('assessments', [
            'student_id' => $student->id,
            'feedback' => 'Good progress, needs improvement in time management',
            'performance' => 4
        ]);
    }

    /**
     * Test coordinator analytics view.
     *
     * @return void
     */
    public function testCoordinatorAnalyticsView()
    {
        $coordinator = User::factory()->create(['role' => 'Coordinator']);
        $this->actingAs($coordinator);

        $response = $this->get('/analytics');

        $response->assertStatus(200);
        $response->assertViewIs('analytics');
        $response->assertViewHas('studentPerformance');
        $response->assertViewHas('attachmentStatistics');
    }

    /**
     * Test director approval/rejection.
     *
     * @return void
     */
    public function testDirectorApprovalRejection()
    {
        $director = User::factory()->create(['role' => 'Director']);
        $student = Student::factory()->create();
        $attachment = Attachment::factory()->create(['student_id' => $student->id]);
        $this->actingAs($director);

        $response = $this->post('/attachment/approve', [
            'attachment_id' => $attachment->id,
            'decision' => 'Approve'
        ]);

        $response->assertStatus(302); // Redirect after successful approval
        $this->assertDatabaseHas('attachments', [
            'id' => $attachment->id,
            'approval_status' => 'Approved'
        ]);
    }
}

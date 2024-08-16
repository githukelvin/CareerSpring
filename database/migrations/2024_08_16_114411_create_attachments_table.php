<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
            $table->string('full_name');
            $table->string('registration_number');
            $table->string('school_email')->unique();
            $table->string('phone_number');
            $table->string('course');
            $table->integer('year_of_study');
            $table->string('company_name');
            $table->string('location');
            $table->string('attachment_position');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};

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
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
            $table->foreignId('lecturer_id')->constrained('lecturers', 'lecturer_id')->cascadeOnDelete();
            $table->date('day_assessed')->nullable();
            $table->text('feedback')->nullable();
            $table->string('performance')->nullable();
            $table->unique(['student_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};

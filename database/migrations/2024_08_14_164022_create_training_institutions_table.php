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
        Schema::create('training_institutions', function (Blueprint $table) {
            $table->id('institution_id')->primary();
            $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
            $table->string('faculty_dean_name');
            $table->string('faculty_name');
            $table->string('contact_address');
            $table->string('tel_no');
            $table->string('school_name');
            $table->string('director_name');
            $table->string('director_email');
            $table->string('department_name');
            $table->string('chairperson_name');
            $table->string('chairperson_tel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_institutions');
    }
};

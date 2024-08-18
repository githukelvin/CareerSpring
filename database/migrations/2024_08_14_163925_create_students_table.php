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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id')->primary();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('admin_no');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('id_no');
            $table->date('dob');
            $table->string('course');
            $table->string('level');
            $table->integer('year');
            $table->boolean('is_ready_for_assessment')->default(false);
            $table->enum('approval_status', ['Pending', 'Approved', 'Rejected', 'Ready'])->default('Pending');
            $table->string('home_address');
            $table->boolean('approved_director')->default(false);
            $table->string('tel_no');
            $table->integer('progress_level');
            $table->string('next_of_kin_name');
            $table->string('next_of_kin_relationship');
            $table->string('next_of_kin_address');
            $table->string('next_of_kin_tel');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

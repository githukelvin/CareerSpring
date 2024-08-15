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
        Schema::create('weekly_logs', function (Blueprint $table) {
            $table->uuid('log_id')->primary();
            $table->foreignId('student_id')->constrained('students', 'student_id')->cascadeOnDelete();
            $table->integer('week_number');
            $table->text('monday');
            $table->text('tuesday');
            $table->text('wednesday');
            $table->text('thursday');
            $table->text('friday');
            $table->text('student_remarks');
            $table->text('supervisor_remarks');
            $table->boolean('is_ready_for_assessment')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_logs');
    }
};

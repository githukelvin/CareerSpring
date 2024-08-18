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
        Schema::create('attachment_places', function (Blueprint $table) {
            $table->id('organization_id')->primary();
            $table->foreignId('student_id')
                ->constrained('students', 'student_id')
                ->cascadeOnDelete();
            $table->string('organization_name');
            $table->string('physical_address');
            $table->string('postal_address');
            $table->string('tel_no');
            $table->string('organization_email');
            $table->string('department_name');
            $table->string('head_name');
            $table->string('head_tel');
            $table->string('supervisor_name');
            $table->string('supervisor_tel');
            $table->string('designation');
            $table->string('signature');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachment_places');
    }
};

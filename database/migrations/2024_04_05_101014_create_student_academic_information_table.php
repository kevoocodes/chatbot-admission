<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_academic_information', function (Blueprint $table) {
            $table->id();
            $table->string('secondary_school_name')->nullable();
            $table->string('secondary_school_location')->nullable();
            $table->string('secondary_school_certificate')->nullable();
            $table->string('high_school_name')->nullable();
            $table->string('high_school_location')->nullable();
            $table->string('diploma_course')->nullable();
            $table->string('diploma_university')->nullable();
            $table->string('university_certificate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_academic_information');
    }
};

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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('secondary_school_name');
            $table->string('secondary_school_location');
            $table->binary('secondary_school_certificate'); // Store as BLOB
            $table->string('high_school_name');
            $table->string('high_school_location');
            $table->string('diploma_course');
            $table->string('diploma_university');
            $table->binary('university_certificate'); // Store as BLOB
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

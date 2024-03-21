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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->onDelete('cascade');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('phoneNumber');
            $table->string('nidaNumber');
            $table->string('email');
            $table->string('address');
            $table->date('dateOfBirth');
            $table->string('gender');
            $table->string('nationality');
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

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
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->string('fullname');
            $table->string('phoneNumber');
            $table->string('nidaNumber');
            $table->string('nacteNumber');
            $table->string('email');
            $table->string('address');
            $table->string('region');
            $table->string('postalCode');
            $table->date('dateOfBirth');
            $table->string('gender');
            $table->string('parent');
            $table->string('parentPhonenumber');
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

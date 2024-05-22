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
            $table->string('fullname')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('nidaNumber')->nullable();
            $table->string('nacteNumber')->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('region');
            $table->string('postalCode');
            $table->date('dateOfBirth');
            $table->string('gender');
            $table->string('parent')->nullable();
            $table->string('parentPhonenumber')->nullable();;
            $table->string('nationality')->nullable();
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

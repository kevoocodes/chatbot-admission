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
            $table->string('phoneNumber')->nullable();
            $table->string('nidaNumber')->nullable();
            $table->string('nacteNumber')->unique()->nullable();
            $table->string('email');
            $table->string('address');
            $table->string('region');
            $table->string('postalCode');
            $table->date('dateOfBirth');
            $table->string('gender');
            $table->string('parent')->nullable();
            $table->string('parentPhonenumber')->nullable();;
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

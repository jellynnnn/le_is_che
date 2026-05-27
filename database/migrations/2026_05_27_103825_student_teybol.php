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
        Schema::create('student_teybol', function (Blueprint $table) {
            $table->id();
            $table->string('stud_lname');
            $table->string('stud_fname');
            $table->string('stud_mname');
            $table->integer('stud_age');
            $table->string('stud_email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_teybol');
    }
};

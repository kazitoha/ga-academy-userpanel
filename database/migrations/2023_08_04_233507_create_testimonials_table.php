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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_name_bd');
            $table->string('father_name');
            $table->string('father_name_bd');
            $table->string('mother_name');
            $table->string('mother_name_bd');
            $table->string('exam_name');
            $table->string('exam_year');
            $table->string('group');
            $table->string('board_roll');
            $table->string('board_reg');
            $table->string('session');
            $table->string('exam_centre');
            $table->string('exam_centre_code');
            $table->string('gpa');
            $table->string('date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};

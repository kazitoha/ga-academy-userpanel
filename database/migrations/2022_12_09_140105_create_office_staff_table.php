<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_staff', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('category')->nullable();
            $table->longText('group')->nullable();
            $table->longText('designation')->nullable();
            $table->longText('email')->nullable();
            $table->longText('phone')->nullable();
            $table->string('file_path')->nullable();
            $table->longText('about')->nullable();
            $table->longText('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('office_staff');
    }
};

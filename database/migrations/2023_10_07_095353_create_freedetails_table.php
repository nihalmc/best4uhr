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
        Schema::create('freedetails', function (Blueprint $table) {
            $table->id();
             $table->string('name');
            $table->string('mobile');
            $table->string('email');
            $table->string('experience_region')->nullable();
          $table->integer('experience_years')->nullable();
             $table->string('job_position');
            $table->string('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freedetails');
    }
};

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
        Schema::create('candidate_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id'); // Foreign key to link with the candidates table
            $table->string('home_country');
            $table->string('uae_status');
            $table->string('nationality');
            $table->string('languages_known');
             $table->string('qualification');
              $table->string('gender');
             $table->string('driving_licence')->default('No');
            $table->string('driving_licence_expiry_date')->nullable();
             $table->date('uae_status_expiry_date')->nullable();
             $table->string('experience_region')->nullable();
          $table->integer('experience_years')->nullable();
            $table->string('resume')->nullable();
            $table->timestamps();
             // Define a foreign key constraint
             $table->foreign('candidate_id')
             ->references('id')
             ->on('candidates'); // Cascade delete if a candidate is deleted

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_details');
    }
};

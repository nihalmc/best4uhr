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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_position');
            $table->string('field_of_work');
            $table->string('location');
            $table->string('salary');
            $table->string('nationality');
            $table->string('gender');
            $table->text('requirements');
            $table->date('posted_date');
            $table->date('closing_date');
            $table->string('status')->default('pending');
            $table->string('job_code')->nullable();
            $table->unsignedBigInteger('employer_id'); // Use unsignedBigInteger for the foreign key
            $table->timestamps();

            $table->foreign('employer_id')->references('id')->on('employers');;


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};

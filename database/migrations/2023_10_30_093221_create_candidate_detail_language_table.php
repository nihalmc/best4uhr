<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateDetailLanguageTable extends Migration
{
    public function up()
    {
        Schema::create('candidate_detail_language', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_detail_id');
            $table->unsignedBigInteger('language_id');
            // Add other columns if needed
            $table->timestamps();

            $table->foreign('candidate_detail_id')
                ->references('id')
                ->on('candidate_details')
                ->onDelete('cascade');

            $table->foreign('language_id')
                ->references('id')
                ->on('languages')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidate_detail_language');
    }
}

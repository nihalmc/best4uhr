<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('contact_email')->unique();
             $table->string('mobile');
            $table->string('password');
            $table->boolean('isCandidates')->default(false);
             $table->timestamp('applied_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

         DB::table('candidates')->insert([
            [
                'name' => 'Job seeker',
                'username' => 'jobseeker',
                'contact_email' => 'info@best4uhr.com',
                'mobile'=>'1234567890',
                'password' => bcrypt('jobseeker'),
                'isCandidates' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};

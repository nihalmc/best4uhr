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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('contact_person');
            $table->string('username')->unique();
            $table->string('contact_email')->unique();
             $table->string('mobile');
            $table->string('password');
            $table->boolean('isEmployer')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

         DB::table('employers')->insert([
            [
                'company_name' => 'Employer',
                'contact_person' => 'Employer',
                'username' => 'employer',
                'contact_email' => 'info@best4uhr.com',
                'mobile'=>'1234567890',
                'password' => bcrypt('employer'),
                'isEmployer' => true,
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
        Schema::dropIfExists('employers');
    }
};

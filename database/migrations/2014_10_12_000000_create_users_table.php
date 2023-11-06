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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isAdmin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Best For You HR Consultancy',
                'username' => 'best4uhr',
                'email' => 'info@best4uhr.com',
                'password' => bcrypt('b4u@admin#hr'),
                'isAdmin' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    // 'company_name' => 'nihal mc',
    // 'username' => 'nihalmc',
    // 'contact_email' => 'mnihalmc3@gmail.com',
    // 'password' => bcrypt('orange'),
    // 'isEmployer' => true,
    // 'created_at' => now(),
    // 'updated_at' => now(),
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

<?php

namespace App\Console\Commands;

use App\Models\Jobs;
use Illuminate\Console\Command;

class GenerateJobs extends Command
{
    protected $signature = 'jobs:generate {count}';
    protected $description = 'Generate and add job listings';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $count = $this->argument('count');

        for ($i = 0; $i < $count; $i++) {
             $employerId = 1;
            Jobs::create([
                'employer_id' => $employerId,// Provide a valid employer ID here
                'job_position' => 'Job Position ' . ($i + 1),
                'field_of_work' => 'Field of Work ' . ($i + 1),
                'location' => 'Location ' . ($i + 1),
                'salary' => 'Salary ' . ($i + 1),
                'nationality' => 'Nationality ' . ($i + 1),
                'gender' => 'Gender ' . ($i + 1),
                'requirements' => 'Requirements ' . ($i + 1),
                'posted_date' => now(),
                'closing_date' => now()->addDays(30), // Closing date is set to 30 days from the posted date
            ]);
        }

        $this->info("$count job(s) generated and added successfully!");
    }
}

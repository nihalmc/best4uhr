<?php

namespace App\Console\Commands;

use App\Models\Jobs;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CloseExpiredJobs extends Command
{
    protected $signature = 'jobs:close-expired';
    protected $description = 'Close jobs that have passed their closing date';

    public function handle()
    {
        try {
            $now = now();

            // Find jobs that are open and have a closing date in the past
            $expiredJobs = Jobs::where('status', 'Open')
                ->where('closing_date', '<=', $now)
 ->whereDate('closing_date', '<>', $now->toDateString())
                ->get();

            $expiredJobsCount = $expiredJobs->count();

            if ($expiredJobsCount > 0) {
                foreach ($expiredJobs as $job) {
                    // Update the status of each job to 'Closed'
                    $job->update(['status' => 'Closed']);
                }

                $this->info("Closed {$expiredJobsCount} expired jobs successfully.");
            } else {
                $this->info('No expired jobs to close.');
            }
        } catch (\Exception $e) {
            $this->error('Error closing expired jobs: ' . $e->getMessage());
        }
    }
}

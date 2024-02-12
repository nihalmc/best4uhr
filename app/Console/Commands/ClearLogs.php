<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ClearLogs extends Command
{
    protected $signature = 'logs:clear';
    protected $description = 'Clear log files';

    public function handle()
    {
        // Get the path to the log directory
        $logPath = storage_path('logs');

        // Check available disk space before proceeding
        $availableSpace = disk_free_space($logPath);

        // Specify the minimum disk space required (in bytes)
        $minDiskSpaceRequired = 100000000; // For example, 100 MB

        if ($availableSpace < $minDiskSpaceRequired) {
            // Handle action when disk space is low
            $this->warn('Low disk space! Cannot clear log files.');
            return;
        }

        // Iterate through log files and delete them
        $files = File::glob($logPath . '/*.log');
        foreach ($files as $file) {
            File::delete($file);
        }

        $this->info('Log files cleared successfully.');
    }
}

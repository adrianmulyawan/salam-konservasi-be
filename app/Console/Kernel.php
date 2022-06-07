<?php

namespace App\Console;

use App\Models\Transaction;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function() {
            Transaction::where('submission_status', 'PENDING')->where('payment_status', 'UNPAID')
            ->where('date_of_entry', '<', date("Y-m-d"))
            ->update([
                'submission_status' => 'FAILED',
                'payment_status'    => 'FAILED'
            ]);
        })->everyMinute();

        $schedule->call(function() {
            Transaction::where('submission_status', 'ALLOWED')->where('payment_status', 'UNPAID')
            ->where('date_of_entry', '<', date("Y-m-d"))
            ->update([
                'submission_status' => 'FAILED',
                'payment_status'    => 'FAILED'
            ]);
        })->everyMinute();

        $schedule->call(function() {
            Transaction::where('submission_status', 'REJECTED')->where('payment_status', 'UNPAID')
            ->where('date_of_entry', '<', date("Y-m-d"))
            ->update([
                'submission_status' => 'FAILED',
                'payment_status'    => 'FAILED'
            ]);
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
<<<<<<< HEAD
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
=======
use Laravel\Lumen\Console\Kernel as ConsoleKernel;
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16

class Kernel extends ConsoleKernel
{
    /**
<<<<<<< HEAD
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
=======
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        //
>>>>>>> 7d1b6d8454c92a518cc2b24a08c9408be49cea16
    }
}

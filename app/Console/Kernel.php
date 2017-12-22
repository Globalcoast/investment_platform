<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\User;
use App\Profit;
use App\Capital;
use App\Config;

class Kernel extends ConsoleKernel
{
    /**
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
        // $schedule->command('inspire')
        //          ->hourly();


        $schedule->call(function () {

             $Capitals=Capital::where([['has_ended',0],['has_requested',0],['has_confirmed_payment',1],['has_reinvested',0]])->get();

            foreach ($Capitals as $Capital) {
                
                $Profits=$Capital->profit;

                $count_profit=$Profits->count();

                //get roi period
                $roi_period=Config::where('id',1)->first()->roi_period;

                if($count_profit>=$roi_period){continue;}

                //allocate daily profit
                //get roi value
                $roi_value=Config::where('id',1)->first()->roi_value;

                $invested_capital=$Capital->amount;

                $daily_roi=($roi_value/100)*$invested_capital;

                $profit=new Profit;

                $profit->user_id=$Capital->user->id;

                $profit->capital_id=$Capital->capital->id;

                $profit->amount=$daily_roi;

                $profit->has_requested=0;

                $profit->has_paid=0;

                $profit->automate=0;

                $profit->save();

            }

            //DB::table('recent_users')->delete();
        })->everyMinute();;



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

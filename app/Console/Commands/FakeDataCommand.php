<?php

namespace IMTPMD\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use IMTPMD\Models\Feedback;
use IMTPMD\Models\Meeting;
use IMTPMD\Models\User;

class FakeDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:fake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed the database with fake data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('Do you wish to continue?') && app()->environment() == "local")
        {
            Artisan::call('migrate:refresh', [
                '--seed' => true
            ]);

            factory(User::class,     rand(20, 40))->create();
            factory(Meeting::class,  rand(20, 40))->create();
            factory(Feedback::class, rand(20, 40))->create();
        }
    }
}

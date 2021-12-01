<?php

namespace App\Console\Commands;

use App\Models\JobType;
use Database\Seeders\JobTypeSeeder;
use Illuminate\Console\Command;

class generateJobeType extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:jobtypes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating Job Types dats in DB';

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
     * @return int
     */
    public function handle()
    {
        JobType::truncate();

        $jobTypes = new JobTypeSeeder();
        $jobTypes->run();

        return Command::SUCCESS;
    }
}

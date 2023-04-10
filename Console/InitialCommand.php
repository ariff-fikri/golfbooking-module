<?php

namespace Modules\Golfbooking\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Modules\Golfbooking\Models\User;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class InitialCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'command:initialCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run all the required dependencies for the module to work.';

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
        $bar = $this->output->createProgressBar(4);

        $bar->start();

        Artisan::call('module:enable golfBooking');

        $this->newLine();

        $this->line(Artisan::output());

        $bar->advance();

        Artisan::call('module:publish');

        $this->newLine();

        $this->line(Artisan::output());

        $bar->advance();

        Artisan::call('module:migrate golfbooking');

        $this->newLine();

        $this->line(Artisan::output());

        $bar->advance();

        Artisan::call('module:seed golfBooking');

        $this->newLine();

        $this->line(Artisan::output());

        $bar->finish();
    }
}

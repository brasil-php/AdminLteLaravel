<?php

namespace BrasilPHP\AdminLte\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install pre configs of AdminLTE';

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
       Artisan::call('vendor:publish',[
           '--tag'=>'adminlte:assets'
       ]);
       $this->info('AdminLTE assets installed successful!');
    }
}

<?php

namespace BrasilPHP\AdminLte\Command;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class NewPageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adminlte:newpage {page : name of new page}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'New Page of AdminLTE';

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
        $page = $this->argument('page');
        copy(__DIR__.'/../../stubs/newpage.stub', resource_path()."/views/{$page}.blade.php");
        $this->info('AdminLTE new page installed successful!');
    }
}

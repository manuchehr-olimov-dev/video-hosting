<?php

namespace App\Console\Commands;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunApplication extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void {
        try {
            Artisan::call('key:generate');
            Artisan::call('migrate:refresh');
            Artisan::call('migrate');
            Artisan::call('db:seed');
        } catch (\Exception $e){
            $this->newLine(3);
            $this->error($e->getMessage());
        }

    }
}

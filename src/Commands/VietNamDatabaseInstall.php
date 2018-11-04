<?php

namespace NguyenManh1997\LaravelVietNamDatabase\Commands;

use Illuminate\Console\Command;
use Artisan;

class VietNamDatabaseInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vietnam:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Database Viet Nam';

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
        if ($this->confirm('Do you want to install it?', false)) {
            Artisan::call('vendor:publish',['--tag' => 'migrations']);
            Artisan::call('vendor:publish',['--tag' => 'seeds']);
            Artisan::call('migrate');
            exec('composer dump-autoload'); 
            Artisan::call('db:seed', ['--class' => 'DistrictsTable']);
            Artisan::call('db:seed', ['--class' => 'ProvincesTable']);
            Artisan::call('db:seed', ['--class' => 'WardsTable']);
            $this->displayOutput();
        }
    }

    protected function displayOutput()
    {
        
        $message = [
            "* =========================================================",
            "*",
            "* NM License Copyright 2018 Nguyen Manh",
            "*",
            "*                       _oo0oo_",
            "*                      o8888888o",
            "*                      88\" . \"88",
            "*                      (| -_- |)",
            "*                      0\  =  /0",
            "*                    ___/`---'\___",
            "*                  .' \|     |// '.",
            "*                 / \|||  :  |||// \\",
            "*                / _||||| -:- |||||- \\",
            "*               |   | \  -  /// |   |",
            "*               | \_|  ''\---/''  |_/ |",
            "*               \  .-\__  '-'  ___/-. /",
            "*             ___'. .'  /--.--\  `. .'___",
            "*          .\"\" '<  `.___\_<|>_/___.' >' \"\".",
            "*         | | :  `- \`.;`\ _ /`;.`/ - ` : | |",
            "*         \  \ `_.   \_ __\ /__ _/   .-` /  /",
            "*     =====`-.____`.___ \_____/___.-`___.-'=====",
            "*                       `=---='",
            "*",
            "*     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~",
            "*",
            "*               Buddha Bless:  \"No Bugs\"",
            "*",
            "* =========================================================="
        ];
        $this->line($message);
    }
}

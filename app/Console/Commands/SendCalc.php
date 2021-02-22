<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendCalc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calc:send 
                            {intParam : число N} 
                            {arParams* : Массив} 
                            {--user= : Пользователь}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send calc data to solve the task';

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
        dump($this->arguments());
        dump($this->options());
    }
}

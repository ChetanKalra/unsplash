<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Faker\Generator as Faker;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will create a new dummy user';

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
        $faker = new Faker;

        User::create([
            'name' => 'Kira',
            'email' => 'kira@gmail.co',
            'password' => bcrypt('password')
        ]);
    }
}

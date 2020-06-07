<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'email@gmail.com',
        //     'password' => bcrypt('password'),
        //     'is_admin' => 1
        // ]);

        factory(User::class, 100)->create();
    }
}

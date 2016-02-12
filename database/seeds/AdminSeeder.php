<?php

use App\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User;
    	$user->name = env('ADMIN_USERNAME');
    	$user->email = env('ADMIN_EMAIL');
    	$user->password = bcrypt(env('ADMIN_PASSWORD'));
    	$user->save();
        // User::create([
        //     'name' => env('ADMIN_USERNAME'),
        //     'email' => env('ADMIN_EMAIL'),
        //     'password' => bcrypt(env('ADMIN_PASSWORD')),
        // ]);
    }
}

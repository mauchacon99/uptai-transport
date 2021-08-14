<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
			 'name' => "Mauricio",
			 'email' => "mauchacon99@gmail.com",
			 'status' => true,
			 'password'  => '123456', // password
			 'remember_token' => Str::random(10),
		 ]);
    }
}

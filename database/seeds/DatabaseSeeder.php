<?php

use Illuminate\Database\Seeder;
use App\Models\{Drivers,User};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     	$this->call([
            'RolesSeeder',
     		'UsersSeeder',
            'VenezuelTableSeeder',
            'TradeMarksSeeder'
     	]);
    }
 
}

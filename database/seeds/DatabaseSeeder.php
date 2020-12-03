<?php

use Illuminate\Database\Seeder;
use App\Models\{Drivers,Cars};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->truncateTables([
            'drivers',
            'cars',
        ]);

     	$this->call([
     		'CarsSeeder',
     		'DriversSeeder'
     	]);
    }

      public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker::create();

		$arrays = range(0,20);
		foreach ($arrays as $valor) {
			DB::table('cars')->insert([
				'name'   => $faker->firstName(),
				'surname'=>$faker->LastName(),
				'color'  => Str::random(5),
				'chairs' => rand(1, 99),
				'year'   => date('Y'),
				'trade_marks_id' => '1',
				'models_id'      => '1',
				'status'		 => '1'
			]);
		}
    }
}

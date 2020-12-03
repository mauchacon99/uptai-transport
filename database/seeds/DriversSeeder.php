<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         DB::table('drivers')->insert([
            'identity' => '26832034',
            'name'  => 'Mauricio',
            'surname'  => 'Chacon',
            'sex' => 'masculino',
            'phone'   => '0424700588',
            'birthdate' => date('Y-m-d H:m:s'),
         	'status'   =>'1'
        ]);
    }
}

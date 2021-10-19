<?php

use App\Models\{Models, TradeMarks};
use Illuminate\Database\Seeder;
 
class TradeMarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TradeMarks::create(['description' => 'Ford']);
        TradeMarks::create(['description' => 'Chrevrolet']);
        TradeMarks::create(['description' => 'Toyota']);
        TradeMarks::create(['description' => 'Suzuki']);
        TradeMarks::create(['description' => 'VMW']);
        TradeMarks::create(['description' => 'Mitsubishi']);
        TradeMarks::create(['description' => 'Mazda']);
        TradeMarks::create(['description' => 'Mazda']);
        Models::create([ 'description' => 'EcoSport', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'Fiesta', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'Galaxy', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'Kuga', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'Mondeo', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'Mustang', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'Ranger', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'Tourneo Courier', 'trade_marks_id' =>  1,]);
        Models::create([ 'description' => 'S-Max', 'trade_marks_id' =>  1,]);
    }
}

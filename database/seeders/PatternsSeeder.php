<?php

namespace Database\Seeders;

use App\Support\Csv;
use Illuminate\Database\Seeder;

class PatternsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = database_path('csv/patterns.csv');
        $array = Csv::toArray($csv);
        dd($array);
    }
}

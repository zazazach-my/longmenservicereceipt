<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('statuses')->insert(
            [
                ['id' => 1, 'name' => 'Waiting List'],
                ['id' => 2, 'name' => 'In Progress'],
                ['id' => 3, 'name' => 'Ready To Return Customer'],
                ['id' => 4, 'name' => 'Completed'],
            ]
        );
    }
}

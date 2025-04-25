<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Food', 'hex_color' => '#FF5733', 'description' => 'Groceries and dining'],
            ['name' => 'Transport', 'hex_color' => '#33B5FF', 'description' => 'Fuel, tickets, etc.'],
            ['name' => 'Utilities', 'hex_color' => '#FF33E6', 'description' => 'Bills and utilities']
        ]);
    }
}
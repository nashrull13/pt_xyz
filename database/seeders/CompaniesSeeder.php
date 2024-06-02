<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('companies')->insert([
            ['name' => 'PT. XYZ'],
            ['name' => 'PT. XYZ-1'],
            ['name' => 'PT. XYZ-2'],
        ]);
        
    }
}

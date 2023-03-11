<?php

namespace Database\Seeders;

use App\Models\Corporation;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $corporation = Corporation::find(1);
        $corporation->groups()->createMany([
            [
                'name' => 'Group A',
                'estimated_seconds' => 1,
                'prefix' => 'A'
            ],
            [
                'name' => 'Group B',
                'estimated_seconds' => 2,
                'prefix' => 'B'
            ]
        ]);
    }
}

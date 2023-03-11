<?php

namespace Database\Seeders;

use App\Models\Corporation;
use Illuminate\Database\Seeder;

class CorporationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $corporation = Corporation::create([
            'name' => 'First Corp',
            'service' => 'Default-Service' // Temporary Value
        ]);

        $corporation->users()->create([
            'name' => 'John Doe',
            'email' => 'first@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}

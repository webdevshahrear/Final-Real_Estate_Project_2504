<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Dummy User
        User::create([
            'name' => 'shourab',
            'email' => 'shourab.cit.bd@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // Dummy Building
        $buildings = Building::factory(50)->create();

        // Dummy Units for some buildings
        foreach ($buildings->take(10) as $building) {
            \App\Models\Unit::create([
                'building_id'      => $building->id,
                'floor'            => '3rd Floor',
                'unit_num'         => 'A-301',
                'sq_size'          => '1200',
                'unit_type'        => '3BHK',
                'bedrooms'         => 3,
                'bathrooms'        => 2,
                'amount'           => 25000,
                'security_deposit' => 50000,
                'details'          => 'A premium spacious flat with modern architecture, premium fittings, and standard size balconies.',
                'images'           => [],
                'status'           => true,
                'available_from'   => now(),
                'pet_friendly'     => true,
                'is_furnished'     => true,
                'has_gym'          => true,
                'has_rooftop'      => true,
                'has_parking'      => true,
            ]);
        }
    }
}

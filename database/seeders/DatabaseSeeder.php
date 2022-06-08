<?php

namespace Database\Seeders;

use App\Models\Chauffeur;
use App\Models\Vehicule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            VoyageSeeder::class,
            ClientSeeder::class,
            ReservationSeeder::class,
            VehiculeSeeder::class,
             ActiviteSeeder::class,
            // ChauffeurSeeder::class,


        ]);
    }
}

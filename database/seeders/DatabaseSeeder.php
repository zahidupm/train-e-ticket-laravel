<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Station;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@e-ticket.test',
             'password' => bcrypt('password')
         ]);

        foreach (eticket_stations() as $item){
            $station = new Station();
            $station->name = $item['name'];
            $station->address = $item['address'];
            $station->lat = $item['lat'];
            $station->lon = $item['lon'];
            $station->save();
        }
    }
}

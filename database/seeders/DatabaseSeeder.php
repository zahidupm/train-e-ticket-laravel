<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bogi;
use App\Models\Schedule;
use App\Models\Seat;
use App\Models\Station;
use App\Models\Train;
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

        Station::insert([
            [
                'name' => 'Dhaka',
                'address' => 'Dhaka',
                'lat' => 90.34434,
                'lon' => 92.32434,
            ],
            [
                'name' => 'Dhaka Bimanbondor',
                'address' => 'Dhaka Bimanbondor',
                'lat' => 90.34334,
                'lon' => 92.432434,
            ],
            [
                'name' => 'Khulna',
                'address' => 'Khulna',
                'lat' => 90.3542334,
                'lon' => 92.3432634,
            ]
        ]);


        Train::insert(
            [
                [
                    'name' => 'Suborno Express',
                    'date' => '2022-01-06',
                    'home_station_id' => 1,
                    'start_time' => '06:00'
                ],
                [
                    'name' => 'Chitra Express',
                    'date' => '2022-01-06',
                    'home_station_id' => 1,
                    'start_time' => '11:00'
                ]
            ]
        );


        $trains = Train::all();
        foreach ($trains as $train) {

            foreach (eticket_bogis() as $bogiItem) {
                $bogi = new Bogi();
                $bogi->name = $bogiItem;
                $bogi->train_id = $train->id;
                $bogi->save();

                for ($i = 0; $i <= 30; $i++) {
                    $seat = new Seat();
                    $seat->name = $bogi->name . '-' . $i;
                    $seat->type = rand(0,1);
                    $seat->bogi_id = $bogi->id;
                    $seat->train_id = $train->id;
                    $seat->save();
                }
            }
        }

        $schedule = new Schedule();
        $schedule->train_id = 1;
        $schedule->station_id = 2;
        $schedule->time = '09:00';
        $schedule->shovon_price = 10;
        $schedule->s_chair_price = 15;
        $schedule->f_chair_price = 25;
        $schedule->save();

    }
}

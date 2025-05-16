<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import Faker generator
use Faker\Factory as Faker;
use Carbon\Carbon;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); // crea l'istanza Faker

        //questo codice verra eseguito ogni volta che langiamo questo seeder
        for ($i = 0; $i < 10; $i++) {
            // salvo le variabili
            $today_date = Carbon::today()->toDateString();
            $is_on_time = $faker->boolean();

            $newTrain = new Train();

            $newTrain->date = $today_date;
            $newTrain->company = $faker->company();
            $newTrain->train_type = 'Regionale';
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time =  $faker->time();
            $newTrain->train_number = $faker->bothify('??###');
            $newTrain->platform = $faker->numberBetween(0, 20);
            $newTrain->is_on_time = $is_on_time;
            $newTrain->delay_minutes = $is_on_time ? 0 : $faker->numberBetween(5, 120); // ritardo solo se in ritardo
            $newTrain->is_cancelled = $faker->boolean();

            $newTrain->save();
        }
    }
}

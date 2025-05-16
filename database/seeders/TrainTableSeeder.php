<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //questo codice verra eseguito ogni volta che langiamo questo seeder
        $newTrain = new Train();

        $newTrain->date = '2025-05-15';
        $newTrain->company = 'siciliana';
        $newTrain->train_type = 'Regionale';
        $newTrain->departure_station = 'Torino';
        $newTrain->arrival_station = 'Roma';
        $newTrain->departure_time = '02:05';
        $newTrain->arrival_time =  '10:05';
        $newTrain->train_number = 'XS292';
        $newTrain->platform = 12;
        $newTrain->is_on_time = 1;
        $newTrain->delay_minutes = 0;
        $newTrain->is_cancelled = 0;

        $newTrain->save();
    }
}

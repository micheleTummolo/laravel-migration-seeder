<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<15; $i++){
            $newTrain = new Train();
            $newTrain->azienda = $faker->word(); 
            $newTrain->stazione_di_partenza = $faker->word(); 
            $newTrain->stazione_di_arrivo = $faker->word(); 
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week'); 
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('-1 week', '+1 week'); 
            $newTrain->codice_treno = $faker->bothify('??##??'); 
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20); 
            $newTrain->stato = $faker->randomElement(['In orario', 'Cancellato', 'In ritardo']); 
            $newTrain->save();
        }
    }
}

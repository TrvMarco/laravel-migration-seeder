<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $dates = ['2022-07-12' , '2022-07-11', '2022-07-13'];

        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->country();
            $newTrain->stazione_arrivo = $faker->country();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->regexify('[A-Z]{5}[0-4]{5}');
            $newTrain->numero_carrozze = $faker->numberBetween(1, 40);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->data = $dates[rand(0, count($dates) - 1)];
            $newTrain->save();
        }
    }
}

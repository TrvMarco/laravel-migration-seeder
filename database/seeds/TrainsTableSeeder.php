<?php

use Illuminate\Database\Seeder;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();
        $newTrain->azienda = 'Trenitalia';
        $newTrain->stazione_partenza = 'Venezia';
        $newTrain->stazione_arrivo = 'Bassano del Grappa';
        $newTrain->orario_partenza = '07:50:00';
        $newTrain->orario_arrivo = '08:42:00';
        $newTrain->codice_treno = 'FX4057A3LP';
        $newTrain->numero_carrozze = 12;
        $newTrain->in_orario = true;
        $newTrain->cancellato = false;
        $newTrain->save();
    }
}

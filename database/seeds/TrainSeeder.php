<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'data' => '2022/10/12',
                'stazione_di_partenza' => 'Civitavecchia',
                'stazione_di_arrivo' => 'Roma',
                'orario_di_partenza' => '12:00:00',
                'orario_di_arrivo' => '13:30:00',
                'codice_treno' => 'FGK67DS',
                'numero_carrozze' => 68,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Ferrovie dello stato',
                'data' => '2022/10/12',
                'stazione_di_partenza' => 'Civitavecchia',
                'stazione_di_arrivo' => 'Pisa C.le',
                'orario_di_partenza' => '10:00:00',
                'orario_di_arrivo' => '11:30:00',
                'codice_treno' => 'FGKaop3',
                'numero_carrozze' => 40,
                'in_orario' => 0,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenitalia',
                'data' => '2022/10/13',
                'stazione_di_partenza' => 'Genova',
                'stazione_di_arrivo' => 'Milano',
                'orario_di_partenza' => '22:50:00',
                'orario_di_arrivo' => '23:30:00',
                'codice_treno' => 'H4DKaop3',
                'numero_carrozze' => 20,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Trenitalia',
                'data' => '2022/10/11',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Firenze',
                'orario_di_partenza' => '08:50:00',
                'orario_di_arrivo' => '011:50:00',
                'codice_treno' => 'j4D00op3',
                'numero_carrozze' => 180,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
            [
                'azienda' => 'Ferrovie dello stato',
                'data' => '2022/10/13',
                'stazione_di_partenza' => 'bologna',
                'stazione_di_arrivo' => 'Rovigo',
                'orario_di_partenza' => '21:50:00',
                'orario_di_arrivo' => '23:10:00',
                'codice_treno' => '11KDR89',
                'numero_carrozze' => 56,
                'in_orario' => 0,
                'cancellato' => 1,
            ],
            [
                'azienda' => 'Ferrovie dello stato',
                'data' => '2022/10/10',
                'stazione_di_partenza' => 'Napoli',
                'stazione_di_arrivo' => 'Roma',
                'orario_di_partenza' => '15:50:00',
                'orario_di_arrivo' => '17:15:00',
                'codice_treno' => 'UNO38FR',
                'numero_carrozze' => 12,
                'in_orario' => 1,
                'cancellato' => 0,
            ],
        ];
        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->data = $train['data'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];

            $newTrain->save();
        }
    }
}

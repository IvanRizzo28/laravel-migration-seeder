<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0;$i<50;$i++){
            $element=new Train();
            $element->azienda= $faker->lexify('??????????');
            $element->stazione_partenza=$faker->lexify('??????????');
            $element->stazione_arrivo=$faker->lexify('??????????');

            $data1=$faker->unixTime();
            $data2=$faker->unixTime();
            while($data2<=$data1){
                $data2=$faker->unixTime();
            }

            $element->orario_partenza=date("Y-m-d H:i:s",$data1);
            $element->orario_arrivo=date("Y-m-d H:i:s",$data2);

            $element->codice_treno=$faker->numberBetween(1, 10000);
            $element->numero_carrozze=$faker->numberBetween(1, 100);
            $element->in_orario=$faker->numberBetween(0, 1);
            $element->cancellato=$faker->numberBetween(0,1);
            $element->save();
        }
    }
}

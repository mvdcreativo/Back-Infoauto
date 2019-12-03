<?php

use Illuminate\Database\Seeder;

class TariffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tariff::create([
            'name'=> 'Gratis',
            'price'=> 0,
            'currency_id'=> 1
        ]);
        App\Tariff::create([
            'name'=> 'Exposición básica',
            'price'=> 300,
            'currency_id'=> 1
        ]);
        App\Tariff::create([
            'name'=> 'Exposición media',
            'price'=> 700,
            'currency_id'=> 1
        ]);
        App\Tariff::create([
            'name'=> 'Exposición máxima',
            'price'=> 1500,
            'currency_id'=> 1
        ]);

    }
}

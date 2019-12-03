<?php

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Attribute::create([
            'name'=> 'Aire Acondicionado',
            'slug'=> 'aire-acondicionado',
            'image_id'=> 1
        ]);
        App\Attribute::create([
            'name'=> 'Airbag',
            'slug'=> 'airbag',
            'image_id'=> 1
        ]);
        App\Attribute::create([
            'name'=> 'ABS',
            'slug'=> 'abs',
            'image_id'=> 1
        ]);
        App\Attribute::create([
            'name'=> 'Control de tracción',
            'slug'=> 'control-de-traccion',
            'image_id'=> 1
        ]);
        App\Attribute::create([
            'name'=> 'Distribución inteligente de frenado',
            'slug'=> 'distribucion-inteligente-de-frenado',
            'image_id'=> 1
        ]);
        App\Attribute::create([
            'name'=> 'Airbag Pasajero',
            'slug'=> 'airbag-pasajero',
            'image_id'=> 1
        ]);
        App\Attribute::create([
            'name'=> 'Airbag de cortina',
            'slug'=> 'airbag-de-cortina',
            'image_id'=> 1
        ]);
    }
}

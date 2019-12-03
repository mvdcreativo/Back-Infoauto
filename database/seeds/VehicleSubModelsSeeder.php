<?php

use Illuminate\Database\Seeder;
use App\Vehicles\VehicleSubModel;

class VehicleSubModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Camioneta',
            'slug'=> 'camioneta',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Convertible',
            'slug'=> 'convertible',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Coupé',
            'slug'=> 'coupe',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Crossover',
            'slug'=> 'crossover',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Familiar',
            'slug'=> 'familiar',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Hatchback',
            'slug'=> 'hatchback',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Unico dueño',
            'slug'=> 'unico-dueno',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Microbus',
            'slug'=> 'microbus',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Monovolumen',
            'slug'=> 'monovolumen',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Pick-Up',
            'slug'=> 'pick-up',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Sedán',
            'slug'=> 'sedan',
        ]);
        App\Vehicles\VehicleSubModel::create([
            'name'=> 'Utilitario',
            'slug'=> 'utilitario',
        ]);
    }
}

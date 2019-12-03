<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UsersSeeder::class,
            ImageSeeder::class,
            VehicleCategorySeeder::class,
            BrandSeeder::class,
            CurrencySeeder::class,
            VehicleSubModelsSeeder::class,
            VehicleModelsSeeder::class,
            CountriesTableSeeder::class,
            StatesTableSeeder::class,
            CitiesTableSeeder::class,
            NeighborhoodsTableSeeder::class,
            AttributesTableSeeder::class,
            ExtrasTableSeeder::class,
            AnoTableSeeder::class,
            PriceConditionTableSeeder::class,
            ConditionTableSeeder::class,
            TariffsTableSeeder::class,
            ConditionTableSeeder::class,
            ProductsTableSeeder::Class
            ]);

    }
}

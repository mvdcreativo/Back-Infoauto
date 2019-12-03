<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 20000;
        factory(Product::class, $count)
            ->create()
            ->each(function(Product $product){
                $product->extras()->sync([
                    rand(1,3),
                    rand(4,5),
                    rand(6,7)
                ]);

                $product->attributes()->sync([
                    rand(1,3),
                    rand(4,5),
                    rand(6,7)
                ]);
                
                for ($i=0; $i < 10; $i++) { 
                    $product->images()->save(factory(App\Image::class)->make());
                }
            });
    }
}

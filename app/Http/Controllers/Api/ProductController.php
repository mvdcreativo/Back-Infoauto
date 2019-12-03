<?php

namespace App\Http\Controllers\Api;

use App\Product;
use App\Vehicles\VehicleModel;
use App\Vehicles\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::with('condition', 'user', 'brand', 'vehicle_category','vehicle_model', 'vehicle_sub_model', 'city', 'user', 'price_condition', 'tariff', 'images')->get();
        
    }

    /**
     * Store a newly created resource in storage.
     *                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('user', 'brand', 'vehicle_category','vehicle_model', 'vehicle_sub_model', 'attributes', 'extras', 'city', 'currency','condition', 'images' )->find($id);
        
        if($product){
            $model_id = $product->vehicle_model_id;
            $model = VehicleModel::find($model_id);
            $model->visit++;
            $model->save();

            $brand_id = $product->brand_id;
            $brand = Brand::find($brand_id);
            $brand->visit++;
            $brand->save();

            $product->visit++;
            $product->save();
        }
        
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}

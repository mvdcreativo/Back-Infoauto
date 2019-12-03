<?php

namespace App\Http\Controllers\Api;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchProductController extends Controller
{
    public function search(Request $request, Product $product)
    {
        $cateoria = $request->category;
        $category = $request->category_id;
        $marca = $request->brand;
        $modelo = $request->model;
        $price_min = $request->pricemin;
        $price_max = $request->pricemax;
        $year_min = $request->yearmin;
        $year_max = $request->yearmax;
        $attribute = $request->attribute;
        $condition = $request->condition;
        $user_id = $request->user_id;
        $user = $request->user;
        $tariff_id = $request->tariff_id;
        $limit_page = $request->limit_page; 
        $searcher = $request->searcher;
        if(!$limit_page){
            $limit_page = 20;
        }
        $result= Product::with('brand', 'user', 'price_condition','vehicle_category','vehicle_model', 'vehicle_sub_model', 'attributes', 'extras', 'city', 'currency','condition', 'images' )
            ->orderBy('tariff_id', 'ASC')
            ->orderBy('visit', 'DESC')
            ->categoria($cateoria)
            ->category($category)
            ->marca($marca)
            ->modelo($modelo)
            ->price_min($price_min)
            ->price_max($price_max)
            ->year_min($year_min)
            ->year_max($year_max)
            ->attribute($attribute)
            ->condition($condition)
            ->user_id($user_id)
            ->user($user)
            ->tariff_id($tariff_id)
            ->searcher($searcher)
            ->paginate($limit_page);
            
            
        // return $request->all();
        return response()->json($result, 200);
    }
}

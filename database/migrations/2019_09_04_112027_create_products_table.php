<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('description')->nullable();
            $table->string('name_concat');
            $table->float('price', 10,2);
            $table->string('state');
            $table->integer('km');
            $table->integer('year');
            $table->integer('visit');
            $table->unsignedInteger('condition_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('vehicle_category_id')->nullable();
            $table->unsignedBigInteger('vehicle_model_id');
            $table->unsignedBigInteger('vehicle_sub_model_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('price_condition_id');
            $table->unsignedBigInteger('tariff_id'); 
            $table->unsignedBigInteger('currency_id');                       
            $table->timestamps();

            $table->foreign('condition_id')->references('id')->on('conditions')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('vehicle_category_id')->references('id')->on('vehicle_categories')->onDelete('cascade');
            $table->foreign('vehicle_model_id')->references('id')->on('vehicle_models')->onDelete('cascade');
            $table->foreign('vehicle_sub_model_id')->references('id')->on('vehicle_sub_models')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('price_condition_id')->references('id')->on('price_conditions')->onDelete('cascade');
            $table->foreign('tariff_id')->references('id')->on('tariffs')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

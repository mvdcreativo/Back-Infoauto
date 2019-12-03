<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleModelVehicleSubModelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_model_vehicle_sub_model', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('vehicle_model_id');
            $table->unsignedBigInteger('vehicle_sub_model_id');
            $table->timestamps();

            $table->foreign('vehicle_model_id')->references('id')->on('vehicle_models')
                    ->onDelete('cascade');
            $table->foreign('vehicle_sub_model_id')->references('id')->on('vehicle_sub_models')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models_sub_models');
    }
}

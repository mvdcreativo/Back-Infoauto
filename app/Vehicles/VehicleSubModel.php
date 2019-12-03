<?php

namespace App\Vehicles;
use App\Image;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class VehicleSubModel extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
 
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
   
    ];

    public function veicle_models(){
        return $this->belongsToMany(VehicleModel::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

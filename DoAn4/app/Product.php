<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table = "products";

    protected $fillable=[
        "manufacturer",
        "description"
    ];
    protected $primarykey="id";
    public function product_single(){
        return $this->hasMany("App\ProductSingle","product_id");
    }  
}
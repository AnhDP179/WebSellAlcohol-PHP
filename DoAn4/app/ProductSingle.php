<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSingle extends Model
{
    //
    protected $table = "product_singles";

    protected $fillable=[
        "product_id",
        "wine_name",
        "alcohol_concentration",
        "capacity",
        "amount",
        "price"
    ];
    protected $primarykey="id";
    public function product(){
        return $this->belongsTo("App\Product","product_id");
    }  
    public function picture(){
        return $this->hasMany("App\Picture","product_id");
    }
    public function bill_detail()
    {
        return $this->hasMany("App\BillDetail","ProductId");
    }
}

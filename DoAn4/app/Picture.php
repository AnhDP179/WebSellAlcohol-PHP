<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $table = "pictures";

    protected $fillable=[
        "product_id",
        "picture1",
    ];
    protected $primarykey="id";
    public function productsingle(){
        return $this->belongsTo("App\ProductSingle","product_id");
    }  
    public function bill_detail()
    {
        return $this->hasMany("App\BillDetail","ProductId");
    }
}

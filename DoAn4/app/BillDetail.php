<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = "bill_details";
    protected $fillable = [
        "BillId",
        "ProductId",
        "Quantity",
        "UnitPrice",
        "AddDate"
    ];
    protected $primaryKey = "id";

    public function bill()
    {
        return $this->belongsTo("App\Bill", "BillId");
    }

    public function picture()
    {
        return $this->belongsTo("App\Picture","ProductId");
    }
    public function productsingle()
    {
        return $this->belongsTo("App\ProductSingle","ProductId");
    }
    public function product()
    {
        return $this->belongsTo("App\Product","ProductId");
    }
}

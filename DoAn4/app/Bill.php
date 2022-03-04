<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = "bills";
    protected $fillable = [
        "CustomerId",
        "BillDate",
        "ShippedDate",
        "ShipPhone",
        "ShipAddress",
        "Status",
        "TotalMoney"
    ];
    protected $primaryKey = "id";

    public function customer()
    {
        return $this->belongsTo("App\Customer", 'CustomerId');
    }

    public function bill_details()
    {
        return $this->hasMany("App\BillDetail", "BillId");
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = "customers";
    protected $fillable = [
        "CustomerName",
        "DateOfBirth",
        "Address",
        "Phone",
        "Email"
    ];
    protected $primaryKey = "id";

    public function bill()
    {
        return $this->hasMany("App\Bill", "CustomerId");
    }
}

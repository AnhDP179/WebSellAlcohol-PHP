<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\ProductSingle;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count_product= Product::count();
        $count_productsingle = ProductSingle::count();
        $count_customer = Customer::count();
        $count_bill = Bill::count();


        $bill_new = Bill::orderby("Status", "asc")->orderBy("id","desc")->limit(5)->get();

     
        return view("admin.admin_index", compact(
            "count_product",
            "count_productsingle",
            "count_customer",
            "count_bill",
            "bill_new"
        ));
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bill;
use App\BillDetail;
use App\Picture;
use App\ProductSingle;
use App\Product;

class StatisticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product_pay = BillDetail::groupBy('ProductId')
        ->selectRaw('sum(Quantity) as amount, ProductId')
        ->orderBy('amount','desc')->paginate(5);
        return view("admin.statistic.product_pay", compact('product_pay'));

    }
    public function getBill(Request $request)
    {
        $bill_done = Bill::where("Status",1)->count();
        $bill_wait = Bill::where("Status",0)->count();

        $date_from = $request->input("date_from");
        $date_to = $request->input("date_to");
        
        if ($date_from == "" || $date_to == "" || $date_from >= $date_to) {
            $bill_pay = Bill::orderby("Status", "asc")->orderBy("id","desc")->paginate(5);
        }
        else {
            $bill_pay = Bill::orderby("Status", "asc")->orderBy("id","desc")->whereBetween("BillDate", [$date_from, $date_to])->get();
        }

        $bill_total = Bill::sum('total');

        $bill_total_date = Bill::whereBetween("BillDate", [$date_from, $date_to])->sum('total');
        
        return view("admin.statistic.bill_pay", 
               compact("bill_done","bill_wait",
                       "date_from","date_to",
                       "bill_pay","bill_total","bill_total_date"));
    }


}

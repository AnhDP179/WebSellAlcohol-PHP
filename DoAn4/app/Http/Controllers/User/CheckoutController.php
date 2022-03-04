<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Product;
use App\ProductSingle;
use App\Picture;
use App\Bill;
use App\BillDetail;
use App\Customer;
use Illuminate\Support\Facades\Auth;
use Section;
session_start();

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFormPay(Request $request)
    {
       
        $data_product = Product::all();
        $data_picture=ProductSingle::All();
        $data_single=Picture::All();
        $cart = Cart::content();
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_product = ProductSingle::limit(0)->get();
        }
        else {
            $search_product = ProductSingle::where("wine_name","LIKE","%".$keywords."%")->get();
        }
        return view("user.checkout", compact("data_product", "cart","search_product","data_single","data_picture"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postFormPay(Request $request)
    {
        $c_id = $request->txtid;
        $totalMoney = str_replace(",","",Cart::subtotal(0,3));

        $customer_id = Customer::insertGetId([
            "UserId" => $c_id,
            "CustomerName" => $request->txtName,
            "DateOfBirth" => $request->txtDate,
            "Address" => $request->txtad,
            "Phone" => $request->txtPhone,
            "Email" => $request->txtEmail,
            'created_at' => now(),
            'updated_at' => now()
        ]);
 
        if ($customer_id) {
            $bill_id = Bill::insertGetId([
            'CustomerId' => $customer_id,
            'total' => (int)$totalMoney,
            'Note' => $request->txtNote,
            'BillDate' => now(),
            'ShipPhone' => $request->txtPhone,
            'ShipAddress' => $request->txtad,
            'Status' => 1,
            'created_at' => now(),
            'updated_at' => now()

            ]);
        
        }
      
        if ($bill_id) {
           $cart = Cart::content();
           foreach ($cart as $key => $value) {
               BillDetail::insert([
                    'BillId' => $bill_id,
                    'ProductId' => $value->id,
                    'Quantity' => $value->qty,
                    'UnitPrice' => $value->price,
                    'AddDate' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
               ]);
           }
        }
       
        Cart::destroy();
        return redirect()->route("checkout_success")->with("success","Đặt hàng thành công");
        // dd($request->all());
      
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $data_product = Product::all();
        $cart = Cart::content();
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_product = ProductSingle::limit(0)->get();
        }
        else {
            $search_product = ProductSingle::where("wine_name","LIKE","%".$keywords."%")->get();
        }
       return view("user.checkout_success", compact("data_product", "cart","search_product"));
    }
   

}

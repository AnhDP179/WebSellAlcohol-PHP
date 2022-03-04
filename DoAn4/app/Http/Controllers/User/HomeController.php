<?php

namespace App\Http\Controllers\User;
use Cart;
use App\Product;
use App\ProductSingle;
use App\Picture;
use App\Bill;
use App\BillDetail;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index()
    {
        $data_product=Product::All();
        $data_picture=ProductSingle::All();
        $data_single=Picture::All();
        $cart = Cart::content();

        return view("user.index",compact("data_product","data_single","data_picture","cart",$data_product,$data_single,$data_picture,$cart));
    }
}

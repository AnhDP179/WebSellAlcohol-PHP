<?php

namespace App\Http\Controllers;
use App\Product;
use App\ProductSingle;
use App\Picture;
use Cart;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_product=Product::All();
        $data_single=ProductSingle::All();
        $data_picture=Picture::All();
        $cart = Cart::content();

        return view("home",compact("data_product","data_single","data_picture","cart",$data_product,$data_single,$data_picture,$cart));
    }
}

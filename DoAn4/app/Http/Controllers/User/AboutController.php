<?php

namespace App\Http\Controllers\User;
use App\Product;
use App\ProductSingle;
use App\Picture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;

class AboutController extends Controller
{
    //
    public function index()
    {
        $data_product=Product::All();
        $data_single=ProductSingle::All();
        $data_picture=Picture::All();
        $cart = Cart::content();

        return view("user.about",compact("data_product","data_single","data_picture","cart",$data_product,$data_single,$data_picture,$cart));
    }
}

<?php

namespace App\Http\Controllers\User;
use App\Product;
use App\ProductSingle;
use App\Picture;
use Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data_product=Product::All();
        $data_single=ProductSingle::paginate(9);
        $data_picture=Picture::paginate(9);
        $cart = Cart::content();

        return view("user.product",compact("data_product","data_single","data_picture","cart",$data_product,$data_single,$data_picture,$cart));
    }
    
}

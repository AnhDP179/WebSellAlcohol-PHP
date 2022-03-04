<?php

namespace App\Http\Controllers\User;
use App\Product;
use App\ProductSingle;
use App\Picture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;


class ProductSingleController extends Controller
{
    //
    public function index($id)
    {
        $data_product=ProductSingle::find($id)->product;
        $data_picture=ProductSingle::find($id)->picture;
        $data_single=ProductSingle::find($id);
        $cart = Cart::content();

        return view("user.productsingle",compact("data_product","data_single","data_picture","cart",$data_product,$data_single,$data_picture,$cart));
    }
}

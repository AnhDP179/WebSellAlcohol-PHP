<?php

namespace App\Http\Controllers\User;
use App\Product;
use App\ProductSingle;
use App\Picture;
use App\Helpers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use Section;
session_start();

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $data_product = Product::all();
        $data_picture=Picture::All();
        $cart = Cart::content();
        $keywords = $request->txtSearch;
        if ($keywords == "") {
            $search_product = ProductSingle::limit(0)->get();
        }
        else {
            $search_product = ProductSingle::where("wine_name","LIKE","%".$keywords."%")->get();
        }
        return view("user.cart", compact("data_product", "cart","search_product"));
    }

    public function addCart($id, Request $request){
        $data_single = ProductSingle::find($id);
        // $data_product=ProductSingle::find($id)->product;
        $data_picture=Picture::find($id);
        if($request->qty){
            $qty = $request->qty;

        }else{
            $qty = 1;
        }
        $price = $data_single->price;
        $cart = ['id' => $id, 'name' => $data_single->wine_name, "qty"=>$qty, 'price' => $price,'weight'=>10,'options' => ['img' => $data_picture->picture1]];
        Cart::add($cart);
        // dd(Cart::content());
        return redirect()->route('cart.index')->with('message','Đã mua '.$data_single->wine_name.' thành công');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        //
        $rowId = $request->rowId_cart;
        $qty = $request->qty;
        Cart::update($rowId,$qty);
        return redirect()->route("cart.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
        //
        Cart::remove($rowId);
        return redirect()->route("cart.index")->with("message","Đã xóa sản phẩm trong giỏ hàng thành công");
    }
}

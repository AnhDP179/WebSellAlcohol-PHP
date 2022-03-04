<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\ProductSingle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductSingleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_single=ProductSingle::All();
        return view("admin.admin_product_single",compact('data_single'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product=Product::All();
        return view("admin.add_product_single",compact('product'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new ProductSingle();
        $product->product_id=$request->txtid;
        $product->wine_name=$request->txtwinename;
        $product->alcohol_concentration=$request->txtalcohol;
        $product->capacity=$request->txtcapacity;
        $product->amount=$request->txtamount;
        $product->price=$request->txtprice;
        $product->save();
        return redirect()->route('admin_product_single')->with('message','Thêm thành công !!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        if ($id==null) {
            return redirect()->route("admin_product_single");
        }
        else {
            $product_single = ProductSingle::find($id);
            $product = Product::all();
            return view("admin.edit_product_single",compact("product_single","product"));
        }
            // return view("admin.edit_product_single");

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = ProductSingle::find($id);
        $product->product_id=$request->input('txtid');
        $product->wine_name=$request->input('txtwinename');
        $product->alcohol_concentration=$request->input('txtalcohol');
        $product->capacity=$request->input('txtcapacity');
        $product->amount=$request->input('txtamount');
        $product->price=$request->input('txtprice');
        $product->save();
        return redirect()->route("admin_product_single");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $db = ProductSingle::findOrFail($id);
        $db->delete();
        return redirect()->route("admin_product_single")->with('message', 'Xóa sản phẩm thành công');
    }
}

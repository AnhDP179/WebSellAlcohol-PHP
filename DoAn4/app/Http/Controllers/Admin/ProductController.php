<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\ProductSingle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Product::All();
        return view("admin.admin_product",compact('data'));

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
        return view("admin.add_product",compact('product'));

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
        $product = new Product();
        $product->manufacturer=$request->txtmanufacturer;
        $product->description=$request->txtdescription;
        $product->save();
        return redirect()->route('admin_product')->with('message','Thêm thành công !!!');


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
        //
        if ($id==null) {
            return redirect()->route("admin_product");
        }
        else {
            $product = Product::find($id);
            return view("admin.edit_product",compact("product"));
        }

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
        $product = Product::find($id);
        $product->manufacturer=$request->input('txtmanufacturer');
        $product->description=$request->input('txtdescription');
        $product->save();
        return redirect()->route("admin_product");

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
        $db = Product::findOrFail($id);
        $db->delete();
        return redirect()->route("admin_product")->with('message', 'Xóa thành công');

    }
}

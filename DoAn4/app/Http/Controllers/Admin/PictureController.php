<?php

namespace App\Http\Controllers\Admin;
use App\Product;
use App\ProductSingle;
use App\Picture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_picture=Picture::All();
        return view("admin.admin_picture",compact('data_picture'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $product_single=ProductSingle::All();
        return view("admin.add_picture",compact('product_single'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $picture=new Picture();
        $picture->product_id=$request->txtid;
        //$request->hasfile('fileImg')
        if ($request->hasfile('fileImg')) {
            $file=$request->file('fileImg');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('img',$filename);
            $picture->picture1=$filename;
        }
        else {
            
            $picture->picture1="";
            return $request;
        }

        $picture->save();
        return redirect()->route('admin_picture')->with('message','Thêm thành công !!!');
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
            return redirect()->route("admin_picture");
        }
        else {
            $picture = Picture::find($id);
            $product_single = ProductSingle::all();
            return view("admin.edit_picture",compact("picture","product_single"));
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
        $picture = Picture::find($id);
        $picture->product_id=$request->input('txtid');
        if ($request->hasfile('fileImg')) {
            $file=$request->file('fileImg');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('img',$filename);
            $picture->picture1=$filename;
        }
        else {
            
            $picture->picture1="";
            return $request;
        }

        $picture->save();
        return redirect()->route("admin_picture");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $db = Picture::findOrFail($id);
        $db->delete();
        return redirect()->route("admin_picture")->with('message', 'Xóa thành công');
    }
}

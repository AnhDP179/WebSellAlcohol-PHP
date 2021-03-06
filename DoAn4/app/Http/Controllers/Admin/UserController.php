<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

use App\Roles;

use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $db = User::All();
        return view("admin.user.user", compact("db"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id=null)
    {
        //
        if ($id == null) {
            return redirect()->route("user.index");
        }
        else {
            $db = User::find($id);
            $role = Roles::all();
            return view("admin.user.edit_user",['db'=>$db,'role'=>$role]);
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
        $db = User::find($id);
        $db->name = $request->input('txtname');
        $db->email = $request->input('txtemail');
        $db->role_id = $request->input('sl_role');
        $db->status = $request->input('slstt');
        $db->save();
        return redirect()->route('user.index',[$id])->with("message","C???p nh???t th??nh c??ng");

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
        $db = User::findOrFail($id);
        $db->delete();
        return redirect()->route("user.index")->with("X??a th??nh c??ng");

    }
}

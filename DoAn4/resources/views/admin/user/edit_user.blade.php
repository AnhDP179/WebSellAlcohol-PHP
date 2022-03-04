@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Sửa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold button-primary">Thông tin người dùng</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('user.update',$db->id) }}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method("PUT")

          <div class="form-group">
            <label for="">Tên </label>
            <input type="text" name="txtname" id="" class="form-control" value="{{ $db->name }}">
            <label for="">Email</label>
            <input type="text" name="txtemail" id="" class="form-control" value="{{ $db->email}}">
            <label for="p_category">Quyền</label>
            <select name="sl_role" class="form-control form-control-sm">
                <option value="{{ $db->role->id }}" selected>{{ $db->role->name }}</option>
                @foreach($role as $r)
                     <option value="{{ $r->id }}">{{ $r->name }}</option>
                @endforeach
            </select>
            <label for="p_category">Trạng thái</label>
            <select name="slstt" class="form-control form-control-sm">
                <option value="0" {{ $db->status==0?"":"selected"}}>Ẩn</option>
                <option value="1" {{ $db->status==0?"":"selected"}}>Hiển thị</option>
            </select>
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Sửa">
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
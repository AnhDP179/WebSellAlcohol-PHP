@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Sửa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold button-primary">Khách hàng</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('customer.update',$db->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")
          <div class="form-group">
            <label for="">ID</label>
            <input type="hidden" type="text" name="txtId" id="" class="form-control">
            <label for="">Tên khách hàng</label>
            <input type="text" name="txtName" id="" class="form-control" placeholder="" value="{{ $db->CustomerName }}">
            <label for="">Ngày sinh</label>
            <input type="date" name="txtDate" id="" class="form-control" placeholder="" value="{{ $db->DateOfBirth }}">
            <label for="">Địa chỉ</label>
            <input type="text" name="txtAd" id="" class="form-control" placeholder="" value="{{ $db->Address }}">
            <label for="">Số điện thoại</label>
            <input type="text" name="txtsdt" id="" class="form-control" placeholder="" value="{{ $db->Phone }}">
            <label for="">Email</label>
            <input type="text" name="txtemail" id="" class="form-control" placeholder="" value="{{ $db->Email }}">
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Sửa">
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
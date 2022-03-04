@extends('layouts.admin')
@section('admin_content')
    


<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Thêm</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold button-primary">Tài khoản</h6>
    </div>
    <div class="card-body">
      <form action="{{route("user.store")}}" method="post">
        @csrf
          <div class="form-group">
            <label for="">Tên </label>
            <input type="text" name="txtname" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Email</label>
            <input type="text" name="txtemail" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Mật khẩu</label>
            <input type="text" name="txtpasword" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Thêm">
            <label for="">Trạng thái</label>
            <select name="slstt" class="form-control form-control-sm">
                <option value="1">Hiển thị</option>
                <option value="0">Ẩn</option>
            </select>
          </div>
      </form>
    </div>
  </div>

</div>
@endsection
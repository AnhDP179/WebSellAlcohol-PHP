@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 button-gray-800">Thêm</h1>
  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
 
      <div class="card-body">
        <form role="form" action="{{ route('role.store') }}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="">Quyền</label>
              <input type="text"  class="form-control" name="txtName" placeholder="Tên quyền" required>
              <label for="">Trạng thái</label>
              <select name="slstt"  class="form-control form-control-sm">
                  <option disabled selected>Chọn trạng thái</option>
                  <option value="0">Ẩn</option>
                  <option value="1">Hiển thị</option>
              </select>
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Thêm">
            </div>
        </form>
      </div>
    </div>
  
  </div>
  
@endsection
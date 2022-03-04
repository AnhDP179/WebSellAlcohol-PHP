@extends('layouts.admin')
@section('admin_content')
    


<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Thêm</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold button-primary">Loại Rượu</h6>
    </div>
    <div class="card-body">
      <form action="{{route("add_product")}}" method="post">
        @csrf
          <div class="form-group">
            <label for="">Tên loại rượu</label>
            <input type="text" name="txtmanufacturer" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Mô tả</label>
            <input type="text" name="txtdescription" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Thêm">
          </div>
      </form>
    </div>
  </div>

</div>
@endsection
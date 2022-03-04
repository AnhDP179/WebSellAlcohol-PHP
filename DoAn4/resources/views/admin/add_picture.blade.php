@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 button-gray-800">Thêm</h1>
  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold button-primary">Rượu</h6>
      </div>
      <div class="card-body">
        <form action="{{route("add_picture")}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="">Chọn rượu</label>
                <select class="form-control" name="txtid" id="">
                    @foreach ($product_single as $item)
                    <option value="{{$item->id}}">{{$item->wine_name}}</option>
                    @endforeach
                </select>
              <label for="image">Hình ảnh </label>
              <input type="file" name="fileImg" id="" class="form-control" >
              <input type="submit" name="" id="" class="btn btn-info mt-5" value="Thêm">
  
            </div>
        </form>
      </div>
    </div>
@endsection
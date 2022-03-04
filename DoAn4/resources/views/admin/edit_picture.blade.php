@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Sửa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold button-primary">Hình ảnh</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('update_picture',$picture->id) }}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
              <label for="">Chọn loại rượu</label>
              <select class="form-control" name="txtid" id="">
                 <option value="{{ $picture->productsingle->id}}" selected>{{ $picture->productsingle->wine_name }}</option>
                  @foreach ($product_single as $item)
                      <option value="{{$item->id}}">{{$item->wine_name}}</option>
                  @endforeach

              </select>
            <label for="">Hình ảnh</label>
            <input type="file" name="fileImg" id="" class="form-control" value="{{ $picture->picture1 }}">
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Sửa">
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
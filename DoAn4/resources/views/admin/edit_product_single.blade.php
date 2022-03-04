@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Sửa</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold button-primary">Rượu</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('update_product_single',$product_single->id) }}" method="post">
        @csrf
          <div class="form-group">
              <label for="">Chọn loại rượu</label>
              <select class="form-control" name="txtid" id="">
                 <option value="{{ $product_single->product->id}}" selected>{{ $product_single->product->manufacturer }}</option>
                  @foreach ($product as $item)
                      <option value="{{$item->id}}">{{$item->manufacturer}}</option>
                  @endforeach

              </select>
            <label for="">Tên rượu</label>
            <input type="text" name="txtwinename" id="" class="form-control" value="{{ $product_single->wine_name }}">
            <label for="">Nồng độ cồn</label>
            <input type="text" name="txtalcohol" id="" class="form-control" value="{{ $product_single->alcohol_concentration }}">
            <label for="">Dung tích</label>
            <input type="text" name="txtcapacity" id="" class="form-control" value="{{ $product_single->capacity }}">
            <label for="">Số lượng</label>
            <input type="text" name="txtamount" id="" class="form-control" value="{{ $product_single->amount }}">
            <label for="">Giá</label>
            <input type="text" name="txtprice" id="" class="form-control" value="{{ $product_single->price }}">
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Sửa">
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
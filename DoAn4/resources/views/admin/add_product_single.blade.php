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
      <form action="{{route("add_product_single")}}" method="post">
        @csrf
          <div class="form-group">
              <label for="">Chọn loại rượu</label>
              <select class="form-control" name="txtid" id="">
                  @foreach ($product as $item)
                  <option value="{{$item->id}}">{{$item->manufacturer}}</option>
                  @endforeach

              </select>
            <label for="">Tên rượu</label>
            <input type="text" name="txtwinename" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Nồng độ cồn</label>
            <input type="text" name="txtalcohol" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Dung tích</label>
            <input type="text" name="txtcapacity" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Số lượng</label>
            <input type="text" name="txtamount" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <label for="">Giá</label>
            <input type="text" name="txtprice" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Thêm">

          </div>
      </form>
    </div>
  </div>

</div>
@endsection
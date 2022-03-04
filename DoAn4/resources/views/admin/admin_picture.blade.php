@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 button-gray-800">Hình ảnh</h1>
  
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <a href="{{route("add_picture")}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>
  
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              @php
                  $tt=1;
              @endphp
              <tr>
                <th class="text-center">STT</th>
                <th>Tên rượu</th>
                <th>Hình ảnh</th>
                <th>Chức năng</th>
              </tr>
            </thead>
  <p>Thanh toán:</p>
            <tbody>
              @foreach($data_picture as $item)
              <tr>
                <td class="text-center">{{ $tt++ }}</td>
                <td value="{{$item->product_id}}">{{$item->productsingle->wine_name}}</td>
                <td class="text-center"><img src="{{ asset('img'.'/'.$item->picture1) }}" alt="" height="100px" width="100px"></td>
                <td>
                  <div class="form-group text-center">
                    <a href="{{ route('edit_picture',$item->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="{{ route('delete_picture',$item->id) }}" class="btn btn-warning"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  
  </div>
@endsection
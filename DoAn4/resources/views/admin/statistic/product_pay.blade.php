@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Bán chạy nhất</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            @php
               $tt = 1
            @endphp
            <tr>
              <th class="text-center">STT</th>
              <th>Mã Rượu</th>
              <th>Tên rượu</th>
              <th>Số lượng đã được đặt</th>
              <th>Giá (VND)</th>
              {{-- <th>Hình ảnh</th> --}}
            </tr>
          </thead>

          <tbody>
            @foreach($product_pay as $item)
            <tr>
              <td class="text-center">{{ $tt++ }}</td>
              <td>{{$item->productsingle->id}}</td>
              <td>{{$item->productsingle->wine_name}}</td>
              <td style="text-align: right">{{$item->amount}}</td>
              <td style="text-align: right">{{number_format($item->productsingle->price)}} </td>
              {{-- <td><img src="{{ asset($item->picture->picture1) }}" alt="" height="100px" width="100px"></td> --}}
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection
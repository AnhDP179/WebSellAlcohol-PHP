@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Chi tiết hóa đơn</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    @csrf
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" enctype="multipart/form-data">
          <thead>
            <tr>
              <th>Mã hóa đơn</th>
              <th>Tên khách hàng</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Ghi chú</th>
              <th>Tổng hóa đơn (VND)</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 1; $i++)
            <td style="text-align: center"> {{ $bill_detail[$i]->bill->id}}</td> 
            <td> {{ $bill_detail[$i]->bill->customer->CustomerName }}</td> 
            <td> {{ $bill_detail[$i]->bill->customer->Phone }}</td> 
            <td> {{ $bill_detail[$i]->bill->customer->Address }}</td> 
            <td> {{ $bill_detail[$i]->bill->Note }}</td> 
            <td style="text-align: right"> {{ number_format($bill_detail[$i]->bill->total) }}</td> 
 
            @endfor
          </tbody>        
          <thead>
            @php
               $tt = 1
            @endphp
            <tr>
              <th class="text-center">STT</th>
              <th>Tên rượu</th>
              <th>Hình ảnh</th>
              <th>Đơn giá (VND)</th>
              <th>Số lượng</th>
              <th>Thành tiền (VND)</th>
              <th>Xoá</th>
            </tr>
          </thead>
          <tbody>           
            @foreach($bill_detail as $item)
            <tr>
              <td class="text-center">{{ $tt++ }}</td>
              <td value="">{{$item->productsingle->wine_name}}</td>
              <td value="" ><img src="{{ asset('img'.'/'.$item->picture->picture1) }}" alt="" height="100px" width="100px"></td>
              <td style="text-align: right" >{{number_format($item->productsingle->price)}}</td>
              <td style="text-align: right">{{$item->Quantity}}</td>
              <td style="text-align: right">{{number_format($item->UnitPrice)}} </td>
              <td>
                <div class="form-group text-center">
                  <form role="form" action="{{ route('bill.destroy', $item->id) }}" method="post">
                    @csrf
                   <input type="hidden" name="_method" value="DELETE">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button  type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-warning"><i class="fa fa-trash-o" aria-hidden="true"></i></button>   
                  </form>                
              </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <a target="_blank" href="{{route("print_bill", $item->id)}}" style="width:150px;margin-left:44%;" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i> In hóa đơn</a>
  </div>
</div>
@endsection
<h1 style="font-size: 10px;"></h1>
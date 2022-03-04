@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Hóa đơn</h1>

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
              <th>Tên khách hàng</th>
              <th>Ngày tạo hóa đơn</th>
              <th>Trạng thái</th>
              <th>Chức năng</th>
            </tr>
          </thead>

          <tbody>
            @foreach($db as $item)
            <tr>
              <td class="text-center">{{ $tt++ }}</td>
              <td>{{$item->customer->CustomerName}}</td>
              <td>{{$item->BillDate}}</td>
              <td>
                @if( $item->Status == 1)
                <a href="#" class="label-success label">Đã xử lý</a>
                      @else
                <a href="#" class="label label-defaul">Chờ xử lý</a>
                      @endif
              </td>
              <td>
                <div class="form-group text-center">
                    <a href="{{ route('bill.show', $item->id) }}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i></a>
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

  </div>

</div>
@endsection
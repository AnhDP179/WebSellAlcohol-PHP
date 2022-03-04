@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
    <h1 class="h3 mb-2 button-gray-800">Đơn hàng</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6 left_date">
                <form role="form" action="" method="get">
                    @csrf
                    <div class="form-group">
                        <label for="">Từ <span class="time"> {{ \Carbon\Carbon::parse($date_from)->format('d/m/Y') }}</span></label>
                        <input type="date" name="date_from" value="" class="form-control">
                       
                    </div>
                    <div class="form-group">
                        <label for="">đến <span class="time">{{ \Carbon\Carbon::parse($date_to)->format('d/m/Y') }}</span></label>
                        <input type="date" name="date_to" value="" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-success" value="THỐNG KÊ">
                </form>
            </div> 
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
                @php
                $tt = 1;
                @endphp
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            {{-- <th>Ngày đặt</th> --}}
                            <th>Số điện thoại nhận</th>
                            <th>Địa chỉ nhận</th>
                            <th>Tổng tiền (VNĐ)</th>
                            <th>Ghi chú</th>
                            <th>Trạng thái</th>
                            <th>Xem</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($bill_pay as  $r)
                        <tr>
                            <td>{{ $tt++ }}</td>
                            <td >{{$r->id}}</td>
                            <td  style="text-align:left">{{ $r->customer->CustomerName }}</td>
                            {{-- <td data-label="Ngày đặt">{{ \Carbon\Carbon::parse($r->billDate)->format('d/m/Y') }}</td> --}}
                            <td >{{ $r->ShipPhone }}</td>
                            <td  style="text-align:left">{{ $r->ShipAddress }}</td>
                            <td  style="color:red; font-weight:bold; text-align:right">{{ number_format($r->total ) }}</td>
                            <td  style="text-align:left">{{ $r->Note }}</td>
                            <td >
                                @if( $r->Status == 0)
                                <a href="#" class="label label-warning">Chờ xử lý</a>
                                @else
                                <a href="#" class="label-success label">Đã xử lý</a>
                                @endif
                            </td>
                            <td  class="right__iconTable">
                                <a  data-id ="{{ $r->id }}" href="{{ route('bill.show', $r->id) }}" class="btn btn-dark"><i class="fa fa-eye" aria-hidden="true"  ></i></a>
                            </td>
                            <td  class="right__iconTable">
                                <form role="form" action="{{ route('bill.destroy', $r->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button  type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" class="btn btn-warning"><i class="fa fa-trash-o" aria-hidden="true"></i></button>   
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>    
    </div>
    
</div>
@endsection
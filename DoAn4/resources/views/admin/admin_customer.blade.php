@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Khách hàng</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      {{-- <h6 class="m-0 font-weight-bold button-primary">Rượu</h6> --}}
      <a href="{{route("customer.create")}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>

    </div>
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
              <th>Ngày sinh</th>
              <th>Địa chỉ</th>
              <th>SĐT</th>
              <th>Email</th>
              <th width="100px">Chức năng</th>
            </tr>
          </thead>

          <tbody>
            @foreach($db as $item)
            <tr>
              <td class="text-center">{{ $tt++ }}</td>
              <td>{{$item->CustomerName}}</td>
              <td>{{$item->DateOfBirth}}</td>
              <td>{{$item->Address}}</td>
              <td>{{$item->Phone}}</td>
              <td>{{$item->Email}}</td>

              <td>
                <div class="form-group text-center">
                  <a href="{{ route('customer.edit',$item->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                     <form role="form" action="{{ route('customer.destroy', $item->id) }}" method="post">
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
@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Người dùng</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    {{-- <div class="card-header py-3">
      <a href="{{route("user.create")}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>

    </div> --}}
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            @php
               $tt = 1
            @endphp
            <tr>
              <th class="text-center">STT</th>
              <th>Mã người dùng</th>
              <th>Tên tài khoản đăng nhập</th>
              <th>Quyền</th>
              <th>Ngày tạo</th>
              <th>Trạng thái</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
          </thead>

          <tbody>
            @foreach($db as  $item)
            <tr>
              <td class="text-center">{{ $tt++ }}</td>
              <td class="text-center">{{$item->id}}</td>
              <td>{{$item->email}}</td>
              <td > 
                @if( $item->role->name == 'admin')
                     <a href="#" class="label label-warning">Người quản trị</a>
                @else
                    <a href="#" class="label-success label">Khách hàng</a>
                @endif
                </td>
                <td >{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                <td >
                    {{-- {{ $item->status }}" {{ $item->status==0?'':'checked'}}  > --> --}}
                    @if( $item->status == 0)
                         <a href="#" class="label label-warning">Ngừng</a>
                    @else
                        <a href="#" class="label-success label">Hoạt Động</a>
                    @endif
                </td>
                <td class="right__iconTable"><a href="{{ route('user.edit', $item->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                <td class="right__iconTable">
                    <form role="form" action="{{ route('user.destroy', $item->id) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button  type="submit" onclick="return confirm('Bạn có chắc muốn xóa người dùng này?')" class="btn btn-warning"><i class="fa fa-trash-o" aria-hidden="true"></i></button>   
                    </form>
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
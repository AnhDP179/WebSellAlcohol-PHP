@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Quyền</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{route("role.create")}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>

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
              <th>Mã quyền</th>
              <th>Tên quyền</th>
              <th>Ngày tạo</th>
              <th>Trạng thái</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
          </thead>

          <tbody>
            @foreach($db as  $r)
            <tr>
                <td>{{ $tt++ }}</td>
                <td >{{ $r->id }}</td>
                <td style="text-align:left">{{ $r->name }}</td>
                <td >{{ \Carbon\Carbon::parse($r->created_at)->format('d/m/Y') }}</td>
                <td ><input type="checkbox" name="cbtt" value="{{ $r->status }}" {{ $r->status==0?'':'checked'}}  ></td>
                <td  style="text-align: center" class="right__iconTable">
                    <a href="{{ route('role.edit', $r->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </td>
                <td style="text-align: center">
                    <form role="form" action="{{ route('role.destroy', $r->id) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button  type="submit" onclick="return confirm('Are you sure to delete?')" class="btn btn-warning"><i class="fa fa-trash-o" aria-hidden="true"></i></button>   
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
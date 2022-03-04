@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Loại Rượu</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{route("add_product")}}" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> Thêm</a>

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
              <th>Loại rượu</th>
              <th>Mô tả</th>
              <th width="100px">Chức năng</th>
            </tr>
          </thead>

          <tbody>
            @foreach($data as $item)
            <tr>
              <td class="text-center">{{ $tt++ }}</td>
              <td>{{$item->manufacturer}}</td>
              <td>{{$item->description}}</td>
              <td>
                <div class="form-group text-center">
                  <a href="{{ route('edit_product',$item->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  <a href="{{ route('delete_product',$item->id) }}" class="btn btn-warning"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
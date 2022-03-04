@extends('layouts.admin')
@section('admin_content')
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 button-gray-800">Sửa quyền</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
        <form role="form" action="{{ route('role.update', $db->id) }}" method="post" enctype="multipart/form-data">
            @csrf
        @method("PUT")
          <div class="form-group">
            <label for="title">Quyền</label>
            <input type="text"  class="form-control" value="{{ $db->name }}" name="txtName" required>
            <label for="p_role">Trạng thái</label>
            <select name="sl_stt"  class="form-control form-control-sm">
                <!-- <option disabled selected>Chọn trạng thái</option> -->
                <option value="0" {{ $db->status==0?"":"selected"}}>Ẩn</option>
                <option value="1" {{ $db->status==0?"":"selected"}}>Hiển thị</option>
            </select>
            <input type="submit" name="" id="" class="btn btn-info mt-5" value="Sửa">
          </div>
      </form>
    </div>
  </div>
</div>
@endsection
@extends('layouts.admin')
@section('admin_content')
-- <div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thống kê</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a class="nav-link" href="{{route("admin_product_single")}}">Tổng số sản phẩm</a>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_productsingle }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a class="nav-link" href="/statistic/bill_pay">Tổng số đơn hàng</a>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_bill }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a class="nav-link" href="{{route("admin_customer")}}">Tổng số khách hàng</a>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count_customer }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a class="nav-link" href="/statistic/index">Các sản phẩm bán chạy</a>
              <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
              <div class="row no-gutters align-items-center">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  

  <!-- Content Row -->


</div> 
@endsection
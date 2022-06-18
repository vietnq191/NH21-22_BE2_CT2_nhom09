@extends('master-admin')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Orders</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Total Orders: {{count($orders)}}</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0" style="overflow-x: auto;">
        <table class="table table-striped projects modify-table">
          <thead>
            <tr>
              <th style="width: 9%">Order ID</th>
              <th style="width: 10%">Name</th>
              <th style="width: 15%">Email</th>
              <th style="width: 11%">Phone</th>
              <th style="width: 22%">Address</th>
              <th style="width: 13%">Order Date</th>
              <th style="width: 10%">Total Money</th>
              <th style="width: 10%">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach($orders as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->phone}}</td>
                <td>@if(strlen($value->address) < 40) {{$value->address}} @else {{substr($value->address,0,40)}}... @endif</td>
                <td>{{$value->order_date}}</td>
                <td>${{$value->total_money}}</td>
                <td>
                <a class="btn btn-success btn-sm modify-icon" href="{{ route('admin-view-details-order',['id'=>$value->id])}}">
                    <i class="fa fa-eye">
                    </i>
                    Details
                  </a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{$orders->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate')}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
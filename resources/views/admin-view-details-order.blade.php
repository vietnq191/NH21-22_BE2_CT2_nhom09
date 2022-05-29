@extends('master-admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header" style="padding-bottom: 0;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Order Detail</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url()->previous() }}">Orders</a></li>
                    <li class="breadcrumb-item active">Order Details</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="information">
        <div class="content-header">
            <div class="container-fluid">
                <p>ID Order: {{$order[0]->id}}</p>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>Name: {{$order[0]->username}}</p>
                        <p>Phone: {{$order[0]->phone}}</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Email: {{$order[0]->email}}</p>
                        <p>Order Date: {{$order[0]->order_date}}</p>
                    </div>
                </div>
                <p>Address: {{$order[0]->address}}</p>
            </div>
        </div>
    </div>

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Shipping: @if($order[0]->total_money > 99) Free ship @else $10 @endif</h3>
            <br>
            <h3 class="card-title">Total: ${{$order[0]->total_money}}</h3>
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
                        <th style="width: 10%">Number</th>
                        <th style="width: 45%">Product name</th>
                        <th style="width: 15%">Image</th>
                        <th style="width: 15%">Price</th>
                        <th style="width: 15%">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1; ?>
                    @foreach($list_orders as $value)
                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$value->name}}</td>
                        <td>
                            <img src="{{ asset('img/product/'.$value->image1)}}" width="100px" height="100px" alt="">
                        <td>${{$value->price}}</td>
                        <td>{{$value->quantity}}</td>
                    </tr>
                    <?php $count++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <tr>
            <td>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
            </td>
        </tr>
    </div>
    <!-- /.card -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
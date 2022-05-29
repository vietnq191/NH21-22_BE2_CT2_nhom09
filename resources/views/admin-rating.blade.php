@extends('master-admin')
@section('content')
<?php if(session('success')) { ?>
<div class="alert alert-success">
    {{session('success')}}
</div>
<?php }?>
<?php if(session('unsuccess')) { ?>
<div class="alert alert-danger">
    {{session('unsuccess')}}
</div>
<?php }?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Rating</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="">Rating</a></li>
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
            <h3 class="card-title">Rating</h3>
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
                        <th style="width: 10%">ID</th>
                        <th style="width: 15%">Name of product</th>
                        <th style="width: 15%">Name of user</th>
                        <th style="width: 25%">Comment</th>
                        <th style="width: 12%">Rating</th>
                        <th style="width: 15%">Date</th>
                        <th style="width: 8%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ratings as $value)
                    <tr>
                        <td>{{ $value->id}}</td>
                        <td>@if(strlen($value->product->name) > 50) {{ substr($value->product->name,0,50)}}... @else {{$value->product->name}} @endif</td>
                        <td>{{ $value->user->name}}</td>
                        <td>{{ $value->comment}}</td>
                        <td>
                            <span class="star" style="color: #edbb0e;">
                            <?php $count = 1 ?>
                                @while ($count <= $value->rating_value)
                                    <i class="fa fa-star"></i>
                                    <?php $count++ ?>
                                    @endwhile
                            </span>
                        </td>
                        <td>{{ $value->date}}</td>
                        <td class="project-actions text-left">
                            <form method="POST" action="{{ route('admin-delete-rating', ['id'=>$value->id])}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm modify-icon">
                                    <i class="fas fa-trash ">
                                    </i>
                                    Delete
                                </button>
                                <input type="hidden" name="id" value="{{ $value->id }}">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$ratings->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate')}}
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
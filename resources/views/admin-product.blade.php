@extends('master-admin')
@section('content')
<?php if(session('success')) { ?>
        <div class ="alert alert-success">
          {{session('success')}}
        </div>
        <?php }?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('admin.addproduct')}}">Create New Product</a></li>
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
        <h3 class="card-title">Total Products: {{ count($getAllProducts)}}</h3>

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
              <th style="width: 1%">ID</th>
              <th style="width: 5%">Image</th>
              <th style="width: 20%">Name</th>
              <th style="width: 10%">Type</th>
              <th style="width: 5%">Price</th>
              <th style="width: 20%">Description</th>
              <th style="width: 20%">Infomation</th>
              <th style="width: 14%">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($product as $value) { ?>
              <tr>
                <td><?php echo $value['product_id'] ?></td>
                <td><img src="{{asset('img/product/'.$value['image1'])}}" width="70px" height="70px" alt="image"></td>
                <td><?php if(strlen($value->product_name) < 100){
                    echo $value->product_name;
                }else{
                echo substr($value->product_name, 0, 100)."..." ;}
                 ?></td>
                <td><?php echo $value['protype_name'] ?></td>
                <td><?php echo $value['price'] ?></td>
                <td><?php echo substr($value->description, 0, 100)."..." ?></td>
                <td><?php echo substr($value->infomation, 0, 100)."..." ?></td>
                <td class="project-actions text-left">
                <form method="POST" action="{{route('delete.product',['product'=>$value['product_id']])}}">
                  <a class="btn btn-info btn-sm modify-icon" href="{{route('admin.editproduct',['id'=>$value['product_id']])}}">
                    <i class="fas fa-pencil-alt ">
                    </i>
                    Edit
                  </a>
                    @csrf
                    @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm modify-icon">
                    <i class="fas fa-trash ">
                    </i>
                    Delete
                  </button>
                  </form>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        {{$product->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate')}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
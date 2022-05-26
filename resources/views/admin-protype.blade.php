@extends('master-admin')
@section('content')
<?php if(session('success')) { ?>
        <div class ="alert alert-success">
          {{session('success')}}
        </div>
        <?php }?>
        <?php if(session('unsuccess')) { ?>
        <div class ="alert alert-danger">
          {{session('unsuccess')}}
        </div>
        <?php }?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Protype</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('protype.add')}}">Create New Protype</a></li>
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
        <h3 class="card-title">Protype</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects modify-table">
          <thead>
            <tr>
              <th style="width: 10%">ID</th>
              <th style="width: 20%">Name</th>
              <th style="width: 20%">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($protype as $value) { ?>
              <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td class="project-actions text-left">
                <form method="POST" action="{{route('admin.protype',['protype'=>$value])}}">
                  <a class="btn btn-info btn-sm modify-icon" href="{{route('admin.editprotype',['id'=>$value['id']])}}">
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
        {{$protype->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate')}}
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
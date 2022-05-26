@extends('master-admin')
@section('content')
<?php if(session('usuccess')) { ?>
        <div class ="alert alert-danger">
          <?php echo session('usuccess');?>
        </div>
        <?php }?>
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Protype Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="{{route('admin.addprotype')}}" method="post" enctype="multipart/form-data">
          @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" value="<?php if(session('name')) { 
                    echo session('name');
                }?>" name="name" required>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="{{route('admin.listprotype')}}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Add</button>
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
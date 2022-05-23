@extends('master-admin')
@section('content')
<?php if(session('error')) { ?>
        <div class ="alert alert-danger">
          {{session('error')}}
        </div>
        <?php }?>
 <!-- Content Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">User Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="{{route('admin.updateuser',['id'=>$user[0]['id']])}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
              <input type="hidden" id="inputID" class="form-control" value="<?php echo $user[0]['id'] ?>" name="id" require>
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" value="<?php echo $user[0]['name'] ?>" name="name" require>
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassWord" class="form-control" value="" name="password">
                <label for="inputPhone">Phone</label>
                <input type="number" id="phone" class="form-control" value="<?php echo $user[0]['phone']?>" name="phone" require> 
                <label for="inputEmail">Email</label>
                <input type="email" disabled id="email" class="form-control" value="<?php echo $user[0]['email']?>" name="email" require> 
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="{{route('admin.listuser')}}" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Update</button>
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
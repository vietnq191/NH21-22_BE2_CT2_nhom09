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
            <h1>Add New User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Add New User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="{{route('admin.adduser')}}" method="post" enctype="multipart/form-data">
          @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="name" class="form-control" value="<?php if(session('Name')){echo session('Name');}?>" name="name" required>
                <label for="inputPassword">Password</label>
                <input type="password" id="password" class="form-control" value="" name="password"  required>
                <label for="inputName">Phone</label>
                <input type="number" id="phone" class="form-control" value="<?php if(session('Phone')){echo session('Phone');}?>" name="phone"  required>
                <label for="inputEmail">Email</label>
                <input type="email" id="email" class="form-control" value="<?php if(session('Email')){echo session('Email');}?>" name="email" require> 
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
          <button type="submit" class="btn btn-success float-right">Add User</button>
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
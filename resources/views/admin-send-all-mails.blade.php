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
                <h1>Send All Email</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.email-letter')}}">Email Receive Newsletter</a></li>
                    <li class="breadcrumb-item active">Send All Email</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">
                            Write Your Content
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <form id="form-send-all" onsubmit="submitForm(event)" action="{{ route('admin-send-all-email')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputSubject">Your Subject Mail</label>
                                <input type="text" id="subject" class="form-control" value="" name="subject" required>
                            </div>

                            <div class="form-group">
                                <label for="inputMessage">Message</label>
                                <textarea id="summernote" class="form-control" name="message"
                                    style="width: 100%; height: 200px;" placeholder="Your message" required></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button id="button" style=" width: 150px;height: 46px;" type="submit"
                                class="btn btn-primary float-right send-submit">
                                <div id="spinner-border" class="spinner-border d-none"></div>
                                <div id="text-send" class="text-send">
                                    <i class="fa fa-paper-plane"></i>
                                    Send All Email
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col-->
            <script>
            const form = document.getElementById("form-send-all");
            const spiner = document.getElementById("spinner-border");
            const text = document.getElementById("text-send");
            const txtSubject = document.getElementById("subject").textContent;
            const txtMessage = document.getElementById("summernote").textContent;

            document.getElementById('button').addEventListener("click", function() {
                if (txtSubject.length > 0 && txtMessage.length > 0) {
                    spiner.classList.remove('d-none');
                    text.classList.add('d-none');
                }
            });

            function submitForm(event) {
                event.preventDefault();
                spiner.classList.remove('d-none');
                text.classList.add('d-none');
                document.getElementById('button').disabled = true;
                setTimeout(function() {
                    form.submit();
                }, 0)

            }
            </script>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
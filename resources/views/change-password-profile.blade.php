@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Change Password</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL('/')}}">Home</a>
                        <span>Change Password</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<div class="container">
    <div class="row py-5">
        <div class="col">
        @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
            @endif
            @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
            @endif
            <form name="myForm" action="{{ route('changePasswordPost') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="inputdata">Old Password</label>
                    <input type="password" name="current_password" class="form-control" placeholder="Enter Old Password"
                        value="" required>
                </div>
                <div class="form-group">
                    <label for="inputdata">New Password</label>
                    <input type="password" name="new_password" class="form-control" placeholder="Enter New Password"
                        value="" required>
                </div>
                <div class="form-group">
                    <label for="inputdata">Confirm Password</label>
                    <input type="password" name="new_confirm_password" class="form-control" placeholder="Confirm Password"
                        value="" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Update Now" class="primary-btn order-submit btn-block"
                        style="border-radius: 30px; border: #7fad39 1px solid">
                </div>
            </form>
        </div>
        <div class="col d-none d-md-block">
            <div class="text-center">
                <img src="{{ asset('/img/setting.jpg')}}" width="350px" height="350px" alt="">
            </div>

        </div>
    </div>
</div>
@endsection
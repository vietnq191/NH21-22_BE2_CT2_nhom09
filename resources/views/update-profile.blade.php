@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Setting Profile</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL('/')}}">Home</a>
                        <span>Setting Profile</span>
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
            <form name="myForm" action="{{route('update.user_profile', $getUser->id)}}" method="post" id="setProfile"
                onsubmit="return validateForm()">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="inputdata">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"
                        value="{{ $getUser->name}}" required>
                </div>
                <div class="form-group">
                    <label for="inputdata">E-mail</label>
                    <input disabled type="email" name="emailUpdate" class="form-control" placeholder="Enter Email"
                        value="{{ $getUser->email}}">
                </div>
                <div class="form-group">
                    <label for="inputdata">Your Phone Number</label>
                    <input type="number" name="phone" class="form-control" min="0" placeholder="Enter Phone"
                        value="{{ $getUser->phone}}">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Update Now" class="primary-btn order-submit btn-block"
                        style="border-radius: 30px; border: #7fad39 1px solid">
                </div>
            </form>
            <div id="aleart" class="text-danger">

            </div>
            <script>
            function validateForm() {
                let alerts = document.getElementById('aleart');
                let name = document.forms["myForm"]["name"].value;
                let phone = document.forms["myForm"]["phone"].value;
                if (name.length > 50 && phone.length > 11) {
                    alerts.innerHTML = "Your Name is over 50 characters";
                    alerts.innerHTML += "<br>Your Phone is over 11 characters";
                    return false;
                }
                if (name.length > 50) {
                    alerts.innerHTML = "Your Name is over 50 characters";
                    return false;
                }
                if (phone.length > 11) {
                    alerts.innerHTML = "Your Phone is over 11 characters";
                    return false;
                }
            }
            </script>
        </div>
        <div class="col d-none d-md-block">
            <div class="text-center">
                <img src="{{ asset('/img/setting.jpg')}}" width="350px" height="400px" alt="">
            </div>

        </div>
    </div>
</div>
@endsection
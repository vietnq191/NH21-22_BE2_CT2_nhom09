@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>My Account</h2>
                    <div class="breadcrumb__option">
                        <a href="{{URL('/')}}">Home</a>
                        <span>My Account</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- View Profile -->
<div class="container pt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="profile-page">
                @if(Auth::check())
                <table class="table-profile table-striped table">
                    <tr>
                        <td>
                            <h3> Full name:</h3>
                        </td>
                        <td>
                            <h4 class="text-left">{{$getUser->name}}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>E-mail: </h3>
                        </td>
                        <td>
                            <h4 class="text-left">{{$getUser->email}}</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Phone: </h3>
                        </td>
                        <td>
                            <h4 class="text-left">{{$getUser->phone}}</h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="pb-5 float-right">
                <table>
                    <tr>
                        <td><a href="{{ route('update-profile')}}" class="btn btn-success none"><i class="fa fa-cog"
                                    aria-hidden="true"></i> Setting profile </a></td>
                        <td><a href="{{ route('changePasswordGet')}}" class="btn  btn-warning none"><i class="fa fa-repeat"
                                    aria-hidden="true"></i> Change password </a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-lg-12 delete-cart">
            <div class="shoping__cart__table text-center">
                <div id="change-item-cart">
                    <i class="cartnew-empty"></i>
                    <h2 style="text-align: center;padding:0 70px 20px">You are not logged in</h2>
                    <a href="{{ route('login')}}" class="btn-filter">
                        Login now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</div>
</div>
</div>
@endsection
@extends('master')
@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="{{ route('index')}}">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

@if (Auth::guest())
<div class="container py-5">
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

@else
<!-- Checkout Section Begin -->
@if (Session::has('cart'))
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="{{ route('saveCheckOut') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Full Name<span>*</span></p>
                                    <input id="name" name="username" type="text" required>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input id="address" name="address" type="text" placeholder="Street Address"
                                class="checkout__input__add" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input id="phone" name="phone" type="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input id="email" name="email" type="email" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            @foreach ((array) Session::get('cart')->items as $product)
                            <ul>
                                <li>{{ Str::substr($product['item']->name, 0, 20) }}
                                    <span>
                                        ${{ $product['price'] - (($product['item']->price * $product['item']->sales) / 100) * $product['qty'] }}</span>
                                </li>
                            </ul>
                            @endforeach
                            <div class="checkout__order__subtotal">Transport fees
                                @if (Session::get('cart')->totalPrice > 99)
                                <span>$0</span>
                                @else
                                <span>$10</span>
                            </div>
                            @endif
                            @if (Session::get('cart')->totalPrice > 99)
                            <div class="checkout__order__total">Total
                                <span>${{ Session::get('cart')->totalPrice }}</span>
                            </div>
                            @else
                            <div class="checkout__order__total">Total
                                <span>${{ Session::get('cart')->totalPrice + 10 }}</span>
                            </div>
                            @endif
                            <button onclick="add()" id="submit" type="submit" class="site-btn">PLACE
                                ORDER</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
@else
<div class="container">
    <div class="row">
        <div class="col-lg-12 delete-cart">
            <div class="shoping__cart__table">
                <div id="change-item-cart">
                    <i class="cartnew-empty"></i>
                    <h2 style="text-align: center;padding:70px 0">Your Cart is Empty</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="shoping__cart__btns">
                <a href="{{ url('/') }}" class="primary-btn cart-btn">SHOPPING
                    NOW</a>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="shoping__continue">
                <div class="shoping__discount">

                </div>
            </div>
        </div>
        <div class="col-lg-6">

        </div>
    </div>
</div>
@endif
<!-- Checkout Section End -->
@endif

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>.
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
@endsection
@extends('master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    @if (Session::has('cart'))
        <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Shopping Cart</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.html">Home</a>
                                <span>Shopping Cart</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Shoping Cart Section Begin -->
        <section class="shoping-cart spad">
            <div class="container" id="delete-cart">
                <div class="row">
                    <div class="col-lg-12" id="delete-cart">
                        <div class="shoping__cart__table">
                            <div id="change-item-cart">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="shoping__product">Products</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

                                    @foreach ((array) Session::get('cart')->items as $product)
                                        <tbody>
                                            <tr>
                                                <td class="shoping__cart__item">
                                                    <img style="width: 100px"
                                                        src="{{ asset('img/product/' . $product['item']->image1) }} "
                                                        alt="">
                                                    <h5>{{ Str::substr($product['item']->name, 0, 50) }}</h5>
                                                </td>
                                                <td class="shoping__cart__price">
                                                    {{ $product['item']->price }}
                                                </td>
                                                <td class="shoping__cart__quantity">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="text" value="{{ $product['qty'] }}">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="shoping__cart__total">
                                                    {{ $product['price'] }}
                                                </td>
                                                <td class="shoping__cart__item__close">
                                                    <span class="icon_close"
                                                        onclick="DeleteItemCart({{ $product['item']->id }});"></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="{{ url('/') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                            <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                Upadate Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Discount Codes</h5>
                                <form action="#">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn">APPLY COUPON</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Cart Total</h5>
                            <ul>
                                <li>Subtotal <span></span></li>
                                <li>Total <span>{{ Session::get('cart')->totalPrice }}</span></li>
                            </ul>
                            <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- ko co san pham --}}
        @else
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" id="delete-cart">
                        <div class="shoping__cart__table">
                            <div id="change-item-cart">
                                <i class="cartnew-empty"></i>
                                <h2 style="text-align: center">Your Cart is Empty</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="{{ url('/') }}" class="primary-btn cart-btn">SHOPPING NOW</a>

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
    </section>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <!-- Shoping Cart Section End -->
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection
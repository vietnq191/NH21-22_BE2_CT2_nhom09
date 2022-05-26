@extends('master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Oder details</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/')}}">Home</a>
                            <a href="{{ route('transactionHistory')}}">Order History</a>
                            <span>Oder details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container delete-cart">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <div id="change-item-cart">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Products</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <?php $totalMoney = 0; ?>
                                @foreach ($orderProducts as $product)
                                    <tbody>
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <img style="width: 100px"
                                                    src="{{ asset('img/product/' . $product->image1) }} " alt="">
                                                <h5>{{ Str::substr($product->name, 0, 50) }}</h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                {{ $product->quantity }}
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    ${{ $product->price }}
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total">

                                                ${{ $totalMoney = $product->quantity * $product->price }}

                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <span class="icon_close"></span>
                                            </td>
                                        </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php $totalMoney = null; ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{ url('/') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>

                        <a href="javascript:" class="primary-btn cart-btn cart-btn-right edit-all"><span
                                class="icon_loading"></span>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>.
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
@endsection

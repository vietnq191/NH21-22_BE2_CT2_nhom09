@extends('master')
@section('content')
    <!-- Breadcrumb Section Begin -->
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
        <div class="container delete-cart">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <div id="change-item-cart">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">ID</th>
                                        <th>Phone</th>
                                        <th>Order date</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                @foreach ($items as $product)
                                    <tbody>
                                        <tr>
                                            <td class="shoping__cart__item">
                                                {{-- <img style="width: 100px"
                                                    src="{{ asset('img/product/' . $product['item']->image1) }} " alt=""> --}}
                                                <h5>{{ $product->id }}</h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                {{ $product->phone }}
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    {{ $product->order_date }}
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total">

                                                ${{ $product->total_money }}

                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <a href="{{ route('transactionDetail', $product->id) }}">
                                                    <span>Detail</span></a>
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
    <!-- Shoping Cart Section End -->
    {{-- @if (Session::has('alert-success'))
        <script>
            swal("Payment successful !", "{!! session('alert-success') !!}", "success", {
                button: "OK"
            });
        </script>
    @endif --}}
@endsection

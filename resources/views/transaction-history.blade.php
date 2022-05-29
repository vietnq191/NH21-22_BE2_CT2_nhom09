@extends('master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Order History</h2>
                        <div class="breadcrumb__option">
                            <a href="{{url('/')}}">Home</a>
                            <span>Order History</span>
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
                                        <th>Address</th>
                                        <th>Order date</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                @foreach ($items as $product)
                                    <tbody>
                                        <tr>
                                            <td class="">
                                                <h5>{{ $product->id }}</h5>
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                {{ $product->phone }}
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                {{ $product->address }}
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    {{ $product->order_date }}
                                                </div>
                                            </td>
                                            <td class="shoping__cart__quantity">

                                                ${{ $product->total_money }}

                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <a href="{{ route('transactionDetail', $product->id) }}">
                                                    <span class="text-success" style="font-size:20px">Detail</span></a>
                                            </td>
                                        </tr>
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

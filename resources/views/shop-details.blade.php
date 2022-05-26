@extends('master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-dark">
                    <div class="breadcrumb__text">
                        <h2>{{ $getType[0]['name'] }}</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ url('/') }}">Home</a>
                            <?php $type_id = '/shop-grid/' . $getType[0]['id']; ?>
                            <a href="{{ url($type_id) }}">{{ $getType[0]['name'] }}</a>
                            <span><?php if (strlen($productDetail->name) > 40) {
                                echo substr($productDetail->name, 0, 40) . '...';
                            } else {
                                echo $productDetail->name;
                            } ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ URL::asset('/img/product/' . $productDetail->image1) }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="{{ URL::asset('/img/product/' . $productDetail->image1) }}"
                                src="{{ URL::asset('/img/product/' . $productDetail->image1) }}" alt="">
                            <img data-imgbigurl="{{ URL::asset('/img/product/' . $productDetail->image2) }}"
                                src="{{ URL::asset('/img/product/' . $productDetail->image2) }}" alt="">
                            <img data-imgbigurl="{{ URL::asset('/img/product/' . $productDetail->image3) }}"
                                src="{{ URL::asset('/img/product/' . $productDetail->image3) }}" alt="">
                            <img data-imgbigurl="{{ URL::asset('/img/product/' . $productDetail->image4) }}"
                                src="{{ URL::asset('/img/product/' . $productDetail->image4) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $productDetail->name }}</h3>
                        <div class="product__details__rating">
                            <span>
                                <?php $count = 1; ?>
                                @while ($count <= $ratingAvg)
                                    <i class="fa fa-star"></i>
                                    <?php $count++; ?>
                                @endwhile
                            </span>
                            <span>({{ $countRating }} reviews)</span>
                        </div>
                        <?php if ($productDetail->sales > 0) :
                            $moneySales = $productDetail['price'] * $productDetail['sales'] / 100;
                            $moneySales = $productDetail['price'] - $moneySales; ?>
                        <div>Sale {{ $productDetail->sales }}%</div>
                        <div class="product__details__price">${{ number_format($moneySales, 2, '.', '') }}
                            <span>${{ number_format($productDetail->price, 2, '.', '') }}</span>
                        </div>
                        <?php else: ?>
                        <div class="product__details__price">${{ number_format($productDetail->price, 2, '.', '') }}
                        </div>
                        <?php endif ?>

                        <p>{{ substr($productDetail->description, 0, 500) }}...</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <ul>
                            <li><b>Availability</b> <span>In Stock</span></li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>{{ $productDetail->weight }} kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="{{ $shareSocial['facebook'] }}" target="_blank"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="{{ $shareSocial['twitter'] }}" target="_blank"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="{{ $shareSocial['telegram'] }}" target="_blank"><i
                                            class="fa fa-telegram"></i></a>
                                    <a href="{{ $shareSocial['pinterest'] }}" target="_blank"><i
                                            class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>({{ $countRating }})</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>{{ $productDetail->description }}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    <p>{{ $productDetail->infomation }}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Review Product</h6>
                                    <!-- Review -->

                                    <div class="flex-w flex-t p-b-68">
                                        <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                            <img src="{{ asset('img/logo.png') }}" alt="avatar">
                                        </div>
                                        @foreach ($getRating as $infoRating)
                                            <div class="size-207" style="background: #eff7f9">
                                                <div class="flex-w flex-sb-m p-b-17">
                                                    <span class="mtext-107 cl2 p-r-20" style="font-weight:600px ">
                                                        By: {{ $infoRating->name }} <i style="color: #7fad39"
                                                            class="fa-solid fa-circle-check"></i> <span
                                                            style="color:#7fad39"> Made a purchase </span>
                                                        <span>{{ date('d-m-Y', strtotime($infoRating->date)) }}</span>

                                                    </span> <br>
                                                    <span class="star" style="color: #edbb0e;">
                                                        <?php $count = 1; ?>
                                                        @while ($count <= $infoRating->rating_value)
                                                            <i class="fa fa-star"></i>
                                                            <?php $count++; ?>
                                                        @endwhile
                                                    </span>
                                                </div>
                                                <p class="stext-102 cl6">
                                                    {{ $infoRating->comment }}

                                                </p>
                                            </div>
                                        @endforeach
                                        {{ $getRating->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate') }}
                                    </div>
                                    <div>

                                    </div>
                                    @if (Auth::guest())
                                        <h5>Please login and purchase to rate the product</h5>
                                    @else
                                        <div class="stars">
                                            @if ($checkPurchase->count() > 0)
                                                <form action="{{ url('/add-rating') }}" method="POST">
                                                    @csrf

                                                    <input type="hidden" name="product_id"
                                                        value="{{ $productDetail->id }}">
                                                    <div style="display: inline-block">
                                                        <input class="star star-5" id="star-5" value="5" type="radio"
                                                            checked name="star" />
                                                        <label class="star star-5" for="star-5"></label>
                                                        <input class="star star-4" id="star-4" value="4" type="radio"
                                                            name="star" />
                                                        <label class="star star-4" for="star-4"></label>
                                                        <input class="star star-3" id="star-3" value="3" type="radio"
                                                            name="star" />
                                                        <label class="star star-3" for="star-3"></label>
                                                        <input class="star star-2" id="star-2" value="2" type="radio"
                                                            name="star" />
                                                        <label class="star star-2" for="star-2"></label>
                                                        <input class="star star-1" id="star-1" value="1" type="radio"
                                                            name="star" />
                                                        <label class="star star-1" for="star-1"></label>
                                                    </div>
                                                    @if (session('rated'))
                                                        <div class="form-group"
                                                            style="background-color:#f8d7da; color:#751f5a; padding:20px 0">
                                                            {{ session('rated') }}
                                                        </div>
                                                    @endif
                                                    <div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="review" placeholder="Enter your review" required maxlength="200"></textarea>
                                                        </div>
                                                    </div>

                                                    <div><input class="btn btn-large" type="submit" name="submit"
                                                            value="Send" style="background:#7fad39;color:white">
                                                    </div>

                                                </form>
                                            @else
                                                <h5>You are not eligible to review this product</h5>
                                                <p>For the trusthworthiness of the reviews, only customers who purchased
                                                    the product can write a review about the product</p>
                                            @endif
                                    @endif
                                </div>

                                <!-- End of Review -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="product__discount__slider owl-carousel">
                    @foreach ($relatedProduct as $value)
                        <?php
                        $img = '/img/product/' . $value->image1;
                        $id = '/shop-details/' . $value->product_id;
                        ?>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg" data-setbg="{{ asset($img) }}">
                                    <?php if ($value->sales > 0) :?>
                                    <div class="product__discount__percent">-{{ $value->sales }}%</div>
                                    <?php endif ?>
                                    <ul class="product__item__pic__hover">
                                        <li><a onclick="AddCart({{ $value->product_id }})" href="javascript:"><i
                                                    class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>{{ $value->name }}</span>
                                    <h5><a href="{{ URL($id) }}"><?php if (strlen($value->product_name) > 25) {
                                        echo substr($value->product_name, 0, 25) . '...';
                                    } else {
                                        echo $value->product_name;
                                    } ?></a>
                                    </h5>
                                    <div class="product__item__price">
                                        <?php if ($value->sales > 0) :
                                        $moneySales = $value['price'] * $value['sales'] / 100;
                                        $moneySales = $value['price'] - $moneySales;
                                    ?>
                                        $<?php echo number_format($moneySales, 2, '.', ''); ?><span>$<?php echo number_format($value['price'], 2, '.', ''); ?></span>
                                        <?php else : ?>
                                        $<?php echo number_format($value['price'], 2, '.', ''); ?>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
@endsection

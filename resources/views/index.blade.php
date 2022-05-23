@extends('master')
@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($getNewProduct as $row)
                        <?php $img = '/img/product/' . $row->image1; ?>
                        <div class="col-lg-3">
                            <div class="categories__item product__discount__item__pic set-bg"
                                data-setbg="{{ URL::asset($img) }}">
                                <?php if ($row->sales > 0) :?>
                                <div class="product__discount__percent">-{{ $row->sales }}%</div>
                                <?php endif ?>
                                <?php $id = '/shop-details/' . $row->id; ?>
                                <h5><a style="font-size: 14px!important; background-color: #7fad39"
                                        href="{{ URL($id) }}"><?php echo substr($row->name, 0, 20); ?>...</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($getProtypes as $value)
                                <li data-filter=".type-<?php echo $value['id']; ?>"><?php echo $value['name']; ?></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($getProducts as $value)
                    <?php
                    $img = '/img/product/' . $value->image1;
                    $id = '/shop-details/' . $value->product_id;
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix type-<?php echo $value['id']; ?>">
                        <div class="featured__item">
                            <div class="featured__item__pic product__discount__item__pic set-bg"
                                data-setbg="{{ URL::asset($img) }}">
                                <?php if ($value->sales > 0) :?>
                                <div class="product__discount__percent">-{{ $value->sales }}%</div>
                                <?php endif ?>
                                <ul class="featured__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a onclick="AddCart({{ $value->product_id }})" href="javascript:"><i
                                                class="fa fa-shopping-cart"></i></a></li>
                                    {{-- {{ route('product.addToCart', ['id' => $value->product_id]) }} --}}
                                </ul>
                            </div>
                            <div class="product__discount__item__text">
                                <h5><a href="{{ URL($id) }}"><?php if (strlen($value->product_name) > 30) {
                                    echo substr($value->product_name, 0, 30) . '...';
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
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('/img/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('/img/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <?php $count = 1; ?>
                                @foreach ($getLatestProduct as $row)
                                    <?php
                                    $count++;
                                    $img = '/img/product/' . $row->image1;
                                    $id = '/shop-details/' . $row->id;
                                    ?>
                                    <a href="{{ URL($id) }}" class="latest-product__item">
                                        <div class="latest-product__item__pic small_item">
                                            <img src="{{ URL::asset($img) }}" alt="">
                                            <?php if ($row->sales > 0) :?>
                                            <div class="product__discount__percent">-{{ $row->sales }}%</div>
                                            <?php endif ?>
                                        </div>
                                        <div class="latest-product__item__text product__discount__item__text text-left">
                                            <h6><?php if (strlen($row->name) > 25) {
                                                echo substr($row->name, 0, 25) . '...';
                                            } else {
                                                echo $row->name;
                                            } ?>
                                            </h6>
                                            <div class="product__item__price text-dark font-weight-bold">
                                                <?php if ($row->sales > 0) :
                                        $moneySales = $row['price'] * $row['sales'] / 100;
                                        $moneySales = $row['price'] - $moneySales;
                                    ?>
                                                $<?php echo number_format($moneySales, 2, '.', ''); ?>
                                                <br>
                                                <span class="ml-0">$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
                                                <?php else : ?>
                                                $<?php echo number_format($row['price'], 2, '.', ''); ?>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </a>
                                    <?php if($count > 3) { ?>
                                @break

                                <?php } ?>
                            @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <?php $count = 1; ?>
                            @foreach ($getLatestProduct as $row)
                                <?php
                                    $count++;
                                    if ($count < 5) {
                                    ?>
                                @continue
                                <?php
                                    }
                                    $img = "/img/product/" . $row->image1;
                                    $id =  '/shop-details/' . $row->id;
                                ?>
                                <a href="{{ URL($id) }}" class="latest-product__item">
                                    <div class="latest-product__item__pic small_item">
                                        <img src="{{ URL::asset($img) }}" alt="">
                                        <?php if ($row->sales > 0) :?>
                                        <div class="product__discount__percent">-{{ $row->sales }}%</div>
                                        <?php endif ?>
                                    </div>
                                    <div class="latest-product__item__text product__discount__item__text text-left">
                                        <h6><?php if (strlen($row->name) > 25) {
                                            echo substr($row->name, 0, 25) . '...';
                                        } else {
                                            echo $row->name;
                                        } ?>
                                        </h6>
                                        <div class="product__item__price text-dark font-weight-bold">
                                            <?php if ($row->sales > 0) :
                                        $moneySales = $row['price'] * $row['sales'] / 100;
                                        $moneySales = $row['price'] - $moneySales;
                                    ?>
                                            $<?php echo number_format($moneySales, 2, '.', ''); ?>
                                            <br>
                                            <span class="ml-0">$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
                                            <?php else : ?>
                                            $<?php echo number_format($row['price'], 2, '.', ''); ?>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                </a>
                                <?php if($count > 6) { ?>
                            @break

                            <?php } ?>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="latest-product__text">
                <h4>Low Price Products</h4>
                <div class="latest-product__slider owl-carousel">
                    <div class="latest-prdouct__slider__item">
                        <?php $count = 1; ?>
                        @foreach ($getLowPriceProduct as $row)
                            <?php
                            $count++;
                            $img = '/img/product/' . $row->image1;
                            $id = '/shop-details/' . $row->id;
                            ?>
                            <a href="{{ URL($id) }}" class="latest-product__item">
                                <div class="latest-product__item__pic small_item">
                                    <img src="{{ URL::asset($img) }}" alt="">
                                    <?php if ($row->sales > 0) :?>
                                    <div class="product__discount__percent">-{{ $row->sales }}%</div>
                                    <?php endif ?>
                                </div>
                                <div class="latest-product__item__text product__discount__item__text text-left">
                                    <h6><?php if (strlen($row->name) > 25) {
                                        echo substr($row->name, 0, 25) . '...';
                                    } else {
                                        echo $row->name;
                                    } ?>
                                    </h6>
                                    <div class="product__item__price text-dark font-weight-bold">
                                        <?php if ($row->sales > 0) :
                                        $moneySales = $row['price'] * $row['sales'] / 100;
                                        $moneySales = $row['price'] - $moneySales;
                                    ?>
                                        $<?php echo number_format($moneySales, 2, '.', ''); ?>
                                        <br>
                                        <span class="ml-0">$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
                                        <?php else : ?>
                                        $<?php echo number_format($row['price'], 2, '.', ''); ?>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </a>
                            <?php if($count > 3) { ?>
                        @break

                        <?php } ?>
                    @endforeach
                </div>
                <div class="latest-prdouct__slider__item">
                    <?php $count = 1; ?>
                    @foreach ($getLowPriceProduct as $row)
                        <?php
                                    $count++;
                                    if ($count < 5) {
                                    ?>
                        @continue
                        <?php
                                    }
                                    $img = "/img/product/" . $row->image1;
                                    $id =  '/shop-details/' . $row->id;
                                ?>
                        <a href="{{ URL($id) }}" class="latest-product__item">
                            <div class="latest-product__item__pic small_item">
                                <img src="{{ URL::asset($img) }}" alt="">
                                <?php if ($row->sales > 0) :?>
                                <div class="product__discount__percent">-{{ $row->sales }}%</div>
                                <?php endif ?>
                            </div>
                            <div class="latest-product__item__text product__discount__item__text text-left">
                                <h6><?php if (strlen($row->name) > 25) {
                                    echo substr($row->name, 0, 25) . '...';
                                } else {
                                    echo $row->name;
                                } ?>
                                </h6>
                                <div class="product__item__price text-dark font-weight-bold">
                                    <?php if ($row->sales > 0) :
                                        $moneySales = $row['price'] * $row['sales'] / 100;
                                        $moneySales = $row['price'] - $moneySales;
                                    ?>
                                    $<?php echo number_format($moneySales, 2, '.', ''); ?>
                                    <br>
                                    <span class="ml-0">$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
                                    <?php else : ?>
                                    $<?php echo number_format($row['price'], 2, '.', ''); ?>
                                    <?php endif ?>
                                </div>
                            </div>
                        </a>
                        <?php if($count > 6) { ?>
                    @break

                    <?php } ?>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <div class="latest-product__text">
        <h4>High Price Products</h4>
        <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
                <?php $count = 1; ?>
                @foreach ($getHighPriceProduct as $row)
                    <?php
                    $count++;
                    $img = '/img/product/' . $row->image1;
                    $id = '/shop-details/' . $row->id;
                    ?>
                    <a href="{{ URL($id) }}" class="latest-product__item">
                        <div class="latest-product__item__pic small_item">
                            <img src="{{ URL::asset($img) }}" alt="">
                            <?php if ($row->sales > 0) :?>
                            <div class="product__discount__percent">-{{ $row->sales }}%</div>
                            <?php endif ?>
                        </div>
                        <div class="latest-product__item__text product__discount__item__text text-left">
                            <h6><?php if (strlen($row->name) > 25) {
                                echo substr($row->name, 0, 25) . '...';
                            } else {
                                echo $row->name;
                            } ?>
                            </h6>
                            <div class="product__item__price text-dark font-weight-bold">
                                <?php if ($row->sales > 0) :
                                        $moneySales = $row['price'] * $row['sales'] / 100;
                                        $moneySales = $row['price'] - $moneySales;
                                    ?>
                                $<?php echo number_format($moneySales, 2, '.', ''); ?>
                                <br>
                                <span class="ml-0">$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
                                <?php else : ?>
                                $<?php echo number_format($row['price'], 2, '.', ''); ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </a>
                    <?php if($count > 3) { ?>
                @break

                <?php } ?>
            @endforeach
        </div>
        <div class="latest-prdouct__slider__item">
            <?php $count = 1; ?>
            @foreach ($getHighPriceProduct as $row)
                <?php
                                    $count++;
                                    if ($count < 5) {
                                    ?>
                @continue
                <?php
                                    }
                                    $img = "/img/product/" . $row->image1;
                                    $id =  '/shop-details/' . $row->id;
                                ?>
                <a href="{{ URL($id) }}" class="latest-product__item">
                    <div class="latest-product__item__pic small_item">
                        <img src="{{ URL::asset($img) }}" alt="">
                        <?php if ($row->sales > 0) :?>
                        <div class="product__discount__percent">-{{ $row->sales }}%</div>
                        <?php endif ?>
                    </div>
                    <div class="latest-product__item__text product__discount__item__text text-left">
                        <h6><?php if (strlen($row->name) > 25) {
                            echo substr($row->name, 0, 25) . '...';
                        } else {
                            echo $row->name;
                        } ?>
                        </h6>
                        <div class="product__item__price text-dark font-weight-bold">
                            <?php if ($row->sales > 0) :
                                        $moneySales = $row['price'] * $row['sales'] / 100;
                                        $moneySales = $row['price'] - $moneySales;
                                    ?>
                            $<?php echo number_format($moneySales, 2, '.', ''); ?>
                            <br>
                            <span class="ml-0">$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
                            <?php else : ?>
                            $<?php echo number_format($row['price'], 2, '.', ''); ?>
                            <?php endif ?>
                        </div>
                    </div>
                </a>
                <?php if($count > 6) { ?>
            @break

            <?php } ?>
        @endforeach
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Latest Product Section End -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>.
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
@if (Session::has('alert-success'))
<script>
    swal("Payment successful !", "{!! session('alert-success') !!}", "success", {
        button: "Continue Shopping"
    });
</script>
@endif
@endsection

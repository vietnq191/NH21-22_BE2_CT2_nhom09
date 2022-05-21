@extends('master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <!-- <h2><?php if (isset($getname)) {
                            echo $getname[0]['name'];
                        } else {
                            echo 'Shop';
                        } ?></h2> -->
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white">
                                <label for="white">
                                    White
                                    <input type="radio" id="white">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray">
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red">
                                <label for="red">
                                    Red
                                    <input type="radio" id="red">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Large
                                    <input type="radio" id="large">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Medium
                                    <input type="radio" id="medium">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Small
                                    <input type="radio" id="small">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Tiny
                                    <input type="radio" id="tiny">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
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
                                                <div
                                                    class="latest-product__item__text product__discount__item__text text-left">
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
                                            <div
                                                class="latest-product__item__text product__discount__item__text text-left">
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

        <div class="col-lg-9 col-md-7">
            <div class="product__discount">
                <div class="section-title product__discount__title">
                    <h2>Sale Off</h2>
                </div>
                <div class="row">
                    <div class="product__discount__slider owl-carousel">
                        @foreach ($saleOff as $value)
                            <?php
                            $img = '/img/product/' . $value->image1;
                            $id = '/shop-details/' . $value->product_id;
                            ?>
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="{{ asset($img) }}">
                                        <div class="product__discount__percent">-{{ $value->sales }}%</div>
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a onclick="AddCart({{ $value->product_id }})"
                                                    href="javascript:"><i class="fa fa-shopping-cart"></i></a></li>
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
            @if (count($productsearch) == '0')
                <div style="padding-left: 180px;font-size: 20px">
                    <span>Sorry, OGANI did not find any results matching your keywords
                        <strong>{{ $request->key }}</strong>
                    </span>
                    <ul>
                        <li>Check the spelling of the entered keyword</li>
                        <li>Try again with another keyword</li>
                        <li>Try again with shorter keywords</li>
                    </ul>
                </div>
            @else
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Sort By</span>
                                <select>
                                    <option value="0">Default</option>
                                    <option value="0">Default</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>{{ count($countAllProduct) }}</span> Products found</h6>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($productsearch as $value)
                        <?php
                        $img = '/img/product/' . $value->image1;
                        $id = '/shop-details/' . $value->product_id;
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 mix type-<?php echo $value['id']; ?>">
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
                <hr>
                {{$productsearch->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate')}}
            </div>
            @endif
    </div>
</div>
</section>
<!-- Product Section End -->
@endsection

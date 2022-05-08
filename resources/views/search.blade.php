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
                                                <div class="latest-product__item__pic">
                                                    <img src="{{ URL::asset($img) }}" alt="">
                                                </div>
                                                <div class="latest-product__item__text">
                                                    <h6><?php echo substr($row->name, 0, 20); ?>...</h6>
                                                    <span>$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
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
                                            <div class="latest-product__item__pic">
                                                <img src="{{ URL::asset($img) }}" alt="">
                                            </div>
                                            <div class="latest-product__item__text">
                                                <h6><?php echo substr($row->name, 0, 20); ?>...</h6>
                                                <span>$<?php echo number_format($row['price'], 2, '.', ''); ?></span>
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
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-1.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-2.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Vegetables</span>
                                    <h5><a href="#">Vegetables’package</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-3.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Mixed Fruitss</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-4.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-5.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="product__discount__item">
                                <div class="product__discount__item__pic set-bg"
                                    data-setbg="img/product/discount/pd-6.jpg">
                                    <div class="product__discount__percent">-20%</div>
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__discount__item__text">
                                    <span>Dried Fruit</span>
                                    <h5><a href="#">Raisin’n’nuts</a></h5>
                                    <div class="product__item__price">$30.00 <span>$36.00</span></div>
                                </div>
                            </div>
                        </div>
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
                                <h6><span>{{ count($productsearch) }}</span> Products found</h6>
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
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="featured__item__pic set-bg" data-setbg="{{ URL::asset($img) }}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#"><?php echo substr($value->name, 0, 30); ?>...</a></h6>
                                    <h5>$<?php echo number_format($value['price'], 2, '.', ''); ?></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <hr>
                {{ $getProducts->links() }}
        </div>
        @endif
    </div>
</div>
</section>
<!-- Product Section End -->
@endsection

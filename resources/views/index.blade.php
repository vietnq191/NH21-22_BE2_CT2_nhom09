@extends('master')
@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($getNewProduct as $row)
                    <?php $img = "/img/product/" . $row->image1; ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{URL::asset($img)}}">
                            <?php $id =  '/shop-details/' . $row->id; ?>
                            <h5><a style="font-size: 14px!important; background-color: #7fad39" href="{{URL($id)}}"><?php echo substr($row->name,0,20) ?>...</a></h5>
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
                            @foreach($getProtypes as $value)
                            <li data-filter=".type-<?php echo $value['id'] ?>"><?php echo $value['name'] ?></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($getProducts as $value)
                <?php 
                        $img = "/img/product/" . $value->image1;
                        $id =  '/shop-details/' . $value->product_id;
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix type-<?php echo $value['id'] ?>">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{URL::asset($img)}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{URL($id)}}"><?php echo substr($value['product_name'],0,20) ?>...</a></h6>
                            <h5>$<?php echo number_format($value['price'],2,'.','')  ?></h5>
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
                        <img src="{{asset('/img/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('/img/banner/banner-2.jpg')}}" alt="">
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
                                <?php $count = 1 ?>
                                @foreach($getLatestProduct as $row)
                                <?php 
                                    $count++;
                                    $img = "/img/product/" . $row->image1;
                                    $id =  '/shop-details/' . $row->id;
                                ?>
                                <a href="{{URL($id)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{URL::asset($img)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo substr($row->name,0,20) ?>...</h6>
                                        <span>$<?php echo number_format($row['price'],2,'.','') ?></span>
                                    </div>
                                </a>
                                <?php if($count > 3) { ?>
                                @break
                                <?php } ?>
                                @endforeach
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <?php $count = 1 ?>
                                @foreach($getLatestProduct as $row)
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
                                <a href="{{URL($id)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{URL::asset($img)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo substr($row->name,0,20) ?>...</h6>
                                        <span>$<?php echo number_format($row['price'],2,'.','') ?></span>
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
                                <?php $count = 1 ?>
                                @foreach($getLowPriceProduct as $row)
                                <?php 
                                    $count++;
                                    $img = "/img/product/" . $row->image1;
                                    $id =  '/shop-details/' . $row->id;
                                ?>
                                <a href="{{URL($id)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{URL::asset($img)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo substr($row->name,0,20) ?>...</h6>
                                        <span>$<?php echo number_format($row['price'],2,'.','') ?></span>
                                    </div>
                                </a>
                                <?php if($count > 3) { ?>
                                @break
                                <?php } ?>
                                @endforeach
                            </div>
                        <div class="latest-prdouct__slider__item">
                                <?php $count = 1 ?>
                                @foreach($getLowPriceProduct as $row)
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
                                <a href="{{URL($id)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{URL::asset($img)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo substr($row->name,0,20) ?>...</h6>
                                        <span>$<?php echo number_format($row['price'],2,'.','') ?></span>
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
                                <?php $count = 1 ?>
                                @foreach($getHighPriceProduct as $row)
                                <?php 
                                    $count++;
                                    $img = "/img/product/" . $row->image1;
                                    $id =  '/shop-details/' . $row->id;
                                ?>
                                <a href="{{URL($id)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{URL::asset($img)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo substr($row->name,0,20) ?>...</h6>
                                        <span>$<?php echo number_format($row['price'],2,'.','') ?></span>
                                    </div>
                                </a>
                                <?php if($count > 3) { ?>
                                @break
                                <?php } ?>
                                @endforeach
                        </div>
                        <div class="latest-prdouct__slider__item">
                                <?php $count = 1 ?>
                                @foreach($getHighPriceProduct as $row)
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
                                <a href="{{URL($id)}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{URL::asset($img)}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6><?php echo substr($row->name,0,20) ?>...</h6>
                                        <span>$<?php echo number_format($row['price'],2,'.','') ?></span>
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

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('/img/blog/blog-1.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('/img/blog/blog-2.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('/img/blog/blog-3.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
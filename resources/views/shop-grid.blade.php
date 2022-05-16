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
                        <form>
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                            <li data-min-type="data-min" id="MinProduct" class="hide"><?php if(isset($_GET['Min'])){
                                echo $_GET['Min'];
                            } else{
                               echo 0;
                            }?></li>
                            <li data-max-type="data-max" id="MaxProduct"class="hide"><?php if(isset($_GET['Max'])){
                                echo $_GET['Max'];
                            } else{
                               echo $maxproduct;
                            }?></li>
                            <li data-min-type="data-minn" id="minProducts" class="hide"><?php echo $minproduct ?></li>
                            <li data-min-type="data-maxx" id="maxProducts" class="hide"><?php echo $maxproduct ?></li>
                                <input type="hidden" name="Min" id="min" value="<?php echo 0 ?>">
                                <input type="hidden" name="Max" id="max" value="<?php echo $maxproduct ?>">
                                <div id="price_range"></div>
                            </div>
                            <p id="price_show"><?php if(isset($_GET['Min'])&& isset($_GET['Max'])){

                            echo "$".$_GET['Min']."-$".$_GET['Max'];
                            }else{
                               echo "$".$minproduct."- $".$maxproduct;
                            }?></p>
                            <input type="submit" value="Filter" name="" >
                        </div>
                        </form>
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
            <div class="filter__item">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="filter__sort">
                        <form>
                            @csrf
                            <span>Sort By</span>
                            <select id="sort" name="sort" onchange="this.options[this.selectedIndex].value && (window.location=this.options[this.selectedIndex].value);">
                                <option value="{{Request::url()}}?<?php 
                                if(isset($_GET['Min'])&&isset($_GET['Max'])){
                                echo "Min=".$_GET['Min']."&Max=".$_GET['Max']."&" ; 
                                }else{
                                }?>field=price&sort=desc" <?php if(isset($_GET['field'])&&isset($_GET['sort'])){
                                    if($_GET['field']==="price"&&$_GET['sort']==="desc"){
                                    echo ' selected';}}?>>Price ⬇</option>
                                <option value="{{Request::url()}}?<?php 
                                if(isset($_GET['Min'])&&isset($_GET['Max'])){
                                    echo "Min=".$_GET['Min']."&Max=".$_GET['Max']."&" ; 
                                    }else{}?>field=price&sort=asc" <?php if(isset($_GET['field'])&&isset($_GET['sort'])){
                                    if($_GET['field']==="price"&&$_GET['sort']==="asc"){
                                    echo ' selected';}}?>>Price ⬆</option>
                                <option value="{{Request::url()}}?<?php 
                                if(isset($_GET['Min'])&&isset($_GET['Max'])){
                                    echo "Min=".$_GET['Min']."&Max=".$_GET['Max']."&" ; 
                                    }else{
                                    }?>field=name&sort=desc" <?php if(isset($_GET['field'])&&isset($_GET['sort'])){
                                        if($_GET['field']==="name"&&$_GET['sort']==="desc"){
                                        echo ' selected';}}?>>Name ⬇</option>
                                <option value="{{Request::url()}}?<?php 
                               if(isset($_GET['Min'])&&isset($_GET['Max'])){
                                echo "Min=".$_GET['Min']."&Max=".$_GET['Max']."&" ; 
                                }else{
                                }?>field=name&sort=asc" <?php if(isset($_GET['field'])&&isset($_GET['sort'])){
                                    if($_GET['field']==="name"&&$_GET['sort']==="asc"){
                                    echo ' selected';}}?>>Name ⬆</option>
                            </select>
                            <div style="clear:both;"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="filter__found">
                            <h6><span><?php echo count($countAllProduct); ?></span> Products found</h6>
                        </div1>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="filter__option">
                            <span class="icon_grid-2x2"></span>
                            <span class="icon_ul"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pric">
                @foreach ($getProducts as $value)
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
                {{$getProducts->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate')}}
        </div>
    </div>
</div>
</section>
<!-- Product Section End -->
@endsection

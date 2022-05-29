@extends('master')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <?php if(stripos($_SERVER['REQUEST_URI'], 'shop-grid/')) :?>
                            <span><?php if (count($getProducts) != '0') {
                                $getProducts[0]->name;
                            } ?></span>
                            <?php else : ?>
                            <span>All Categories</span>
                            <?php endif ?>
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
                                    <li data-min-type="data-min" id="MinProduct" class="hide"><?php if (isset($_GET['Min'])) {
                                        echo $_GET['Min'];
                                    } else {
                                        echo 0;
                                    } ?>
                                    </li>
                                    <li data-max-type="data-max" id="MaxProduct" class="hide"><?php if (isset($_GET['Max'])) {
                                        echo $_GET['Max'];
                                    } else {
                                        echo $maxproduct;
                                    } ?>
                                    </li>
                                    <li data-min-type="data-minn" id="minProducts" class="hide">
                                        <?php echo $minproduct; ?>
                                    </li>
                                    <li data-min-type="data-maxx" id="maxProducts" class="hide">
                                        <?php echo $maxproduct; ?>
                                    </li>
                                    <input type="hidden" name="Min" id="min" value="<?php echo 0; ?>">
                                    <input type="hidden" name="Max" id="max" value="<?php echo $maxproduct; ?>">
                                    <input type="hidden" name="field" id="field" value="<?php echo $field; ?>">
                                    <input type="hidden" name="sort" id="sort" value="<?php echo $sort; ?>">
                                    <div id="price_range"></div>
                                </div>
                                <p class="price_show" id="price_show"><?php if (isset($_GET['Min']) && isset($_GET['Max'])) {
                                    echo "$" . $_GET['Min'] . " - $" . $_GET['Max'];
                                } else {
                                    echo "$" . $minproduct . " - $" . $maxproduct;
                                } ?></p>
                                <input class="btn-filter" type="submit" value="Filter" name="">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar__item d-none d-md-block">
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
            @if (count($getProducts) == '0')
                <div style="padding-left: 180px;font-size: 20px">
                    <span>Sorry, OGANI did not find any results matching your price
                        <strong>{{ $min }}-{{ $max }}</strong>
                    </span>
                    <ul>
                        <li>Check the spelling of the entered price</li>
                        <li>Try again with another price</li>
                        <li>Try again with shorter price</li>
                    </ul>
                </div>
            @else
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort text-center">
                                <form>
                                    @csrf
                                    <span>Sort By</span>
                                    <select id="sort" name="sort"
                                        onchange="this.options[this.selectedIndex].value && (window.location=this.options[this.selectedIndex].value);">
                                        <option
                                            value="{{ Request::url() }}?<?php
                                            if (isset($_GET['Min']) && isset($_GET['Max'])) {
                                                echo 'Min=' . $_GET['Min'] . '&Max=' . $_GET['Max'] . '&';
                                            } else {
                                            } ?>field=price&sort=desc"
                                            <?php if (isset($_GET['field']) && isset($_GET['sort'])) {
                                                if ($_GET['field'] === 'price' && $_GET['sort'] === 'desc') {
                                                    echo ' selected';
                                                }
                                            } ?>>Price ⬇</option>
                                        <option
                                            value="{{ Request::url() }}?<?php
                                            if (isset($_GET['Min']) && isset($_GET['Max'])) {
                                                echo 'Min=' . $_GET['Min'] . '&Max=' . $_GET['Max'] . '&';
                                            } else {
                                            } ?>field=price&sort=asc"
                                            <?php if (isset($_GET['field']) && isset($_GET['sort'])) {
                                                if ($_GET['field'] === 'price' && $_GET['sort'] === 'asc') {
                                                    echo ' selected';
                                                }
                                            } ?>>Price ⬆</option>
                                        <option
                                            value="{{ Request::url() }}?<?php
                                            if (isset($_GET['Min']) && isset($_GET['Max'])) {
                                                echo 'Min=' . $_GET['Min'] . '&Max=' . $_GET['Max'] . '&';
                                            } else {
                                            } ?>field=products.name&sort=desc"
                                            <?php if (isset($_GET['field']) && isset($_GET['sort'])) {
                                                if ($_GET['field'] === 'products.name' && $_GET['sort'] === 'desc') {
                                                    echo ' selected';
                                                }
                                            } ?>>Name ⬇</option>
                                        <option
                                            value="{{ Request::url() }}?<?php
                                            if (isset($_GET['Min']) && isset($_GET['Max'])) {
                                                echo 'Min=' . $_GET['Min'] . '&Max=' . $_GET['Max'] . '&';
                                            } else {
                                            } ?>field=products.name&sort=asc"
                                            <?php if (isset($_GET['field']) && isset($_GET['sort'])) {
                                                if ($_GET['field'] === 'products.name' && $_GET['sort'] === 'asc') {
                                                    echo ' selected';
                                                }
                                            } ?>>Name ⬆</option>
                                    </select>
                                    <div style="clear:both;"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">

                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__found">
                                <h6><span><?php echo count($countAllProduct); ?></span> Products found</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pric">
                    @foreach ($getProducts as $value)
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
                {{ $getProducts->onEachSide(1)->appends(request()->all())->links('vendor.pagination.my-paginate') }}
        </div>
        @endif
    </div>
</div>
</div>
</section>
<!-- Product Section End -->
@endsection

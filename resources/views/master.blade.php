<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhóm 9 - Chiều thứ 2</title>
    <link rel="icon" href="{{ asset('/img/link-logo.png') }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>


<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $link);
    $nameURL = end($link_array);
    ?>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('/img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-history"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$0</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('/img/language.png') }}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li <?php if ($nameURL == "index.php") { ?> class="active" <?php } ?>><a
                        href="{{ url('/') }}">Home</a>
                </li>
                <li <?php if ($nameURL == "shop-grid.php") { ?>class="active" <?php } ?>><a
                        href="{{ url('/shop-grid') }}">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                        <li><a href="{{ url('/shoping-cart') }}">Shoping Cart</a></li>
                        <li><a href="{{ url('/checkout') }}">Check Out</a></li>
                        <li><a href="{{ url('/blog-details') }}">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('/img/language.png') }}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">

                                @if (Auth::guest())
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i>
                                        {{ __('Login') }}</a>
                                @else
                                    <i class="fa fa-user-o"></i>
                                    <a style="display: inline" href="#" data-toggle="dropdown" role="button"
                                        aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <a style="display: inline; padding-left: 5px;" href="{{ route('logout') }}">
                                        <i class="fa fa-btn fa-sign-out"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('/img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li <?php if ($nameURL == "index.php") { ?> class="active" <?php } ?>><a
                                    href="{{ url('/') }}">Home</a></li>
                            <li <?php if ($nameURL == "shop-grid") { ?> class="active" <?php } ?>><a
                                    href="{{ url('/shop-grid') }}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{ url('/shop-details') }}">Shop Details</a></li>
                                    <li><a href="{{ url('/shoping-cart') }}">Shoping Cart</a></li>
                                    <li><a href="{{ url('/checkout') }}">Check Out</a></li>
                                    <li><a href="{{ url('/blog-details') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li <?php if ($nameURL == "blog") { ?> class="active" <?php } ?>><a
                                    href="{{ url('/blog') }}">Blog</a></li>
                            <li <?php if ($nameURL == "contact") { ?> class="active" <?php } ?>><a
                                    href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 " id="change-item-cart">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-history"></i>
                                    <span>0</span></a>
                            </li>
                            <li><a href="{{ route('shoppingCart') }}"><i class="fa fa-shopping-bag"></i>
                                    @if (Session::has('cart'))
                                        <span>{{ Session::get('cart')->totalQty }}</span>
                                    @else
                                        <span>0</span>
                                    @endif
                                </a>

                            </li>
                        </ul>
                        @if (Session::has('cart'))
                            <div class="header__cart__price">item:
                                <span>${{ Session::get('cart')->totalPrice }}</span>
                            </div>
                        @else
                            <div class="header__cart__price">item: <span>$0</span></div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero <?php if ($nameURL != 'index.php') {
        echo 'hero-normal';
    } ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="{{ url('shop-grid') }}">All Categories</a></li>
                            @foreach ($getProtypes as $value)
                                <?php $urlID = 'shop-grid/' . $value['id']; ?>
                                <li><a href="{{ url($urlID) }}"><?php echo $value['name']; ?></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{ route('search') }}" method="get">
                                <input type="text" placeholder="What do you need?" name="key">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <?php if ($nameURL == "index.php") {
                    ?>
                    <div class="hero__item set-bg" data-setbg="{{ asset('/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('/img/logo.png') }}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: <a href="https://www.google.com/maps/place/60-49 Road 11378 New York"
                                    target="_blank">60-49 Road 11378 New York</a></li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                            <li><a href="{{ url('/blog') }}">Blog</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{ url('/login') }}">My Account</a></li>
                            <li><a href="{{ url('/shoping-cart') }}">Shopping Cart</a></li>
                            <li><a href="{{ url('/checkout') }}">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="{{ asset('/img/payment-item.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="{{ asset('/js/price.js ') }}"></script>
    <script src="{{ asset('/js/sort.js ') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
</body>

</html>

<a href="{{ route('shoppingCart') }}"><i class="fa fa-shopping-bag"></i>
    <span>{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a>

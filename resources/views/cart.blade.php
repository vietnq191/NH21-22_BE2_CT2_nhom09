<div class="header__cart">
    <ul>
        <li><a href="#"><i class="fa fa-history"></i>
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

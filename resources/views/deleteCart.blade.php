@if (Session::has('cart'))
    <div class="shoping__cart__table">
        <div id="change-item-cart">
            <table>
                <thead>
                    <tr>
                        <th class="shoping__product">Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                @foreach ((array) Session::get('cart')->items as $product)
                    <tbody>
                        <tr>
                            <td class="shoping__cart__item">
                                <img style="width: 100px"
                                    src="{{ asset('img/product/' . $product['item']->image1) }} " alt="">
                                <h5>{{ Str::substr($product['item']->name, 0, 50) }}</h5>
                            </td>
                            <td class="shoping__cart__price">
                                ${{ $product['item']->price - ($product['item']->price * $product['item']->sales) / 100 }}
                            </td>
                            <td class="shoping__cart__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input data-id="{{ $product['item']->id }}" type="text"
                                            value="{{ $product['qty'] }}">
                                    </div>
                                </div>
                            </td>
                            <td class="shoping__cart__total">
                                ${{ $product['price'] - (($product['item']->price * $product['item']->sales) / 100) * $product['qty'] }}
                            </td>
                            <td class="shoping__cart__item__close">
                                <span class="icon_close"
                                    onclick="DeleteItemCart({{ $product['item']->id }});"></span>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="shoping__cart__btns">
                <a href="{{ url('/') }}" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                <a href="javascript:" class="primary-btn cart-btn cart-btn-right edit-all"><span
                        class="icon_loading"></span>
                    Upadate Cart</a>
            </div>
        </div>
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6">
            <div class="shoping__checkout">
                <h5>Cart Total</h5>
                <ul>
                    <li>Subtotal <span></span></li>
                    <li>Total <span>{{ Session::get('cart')->totalPrice }}</span></li>
                </ul>
                @if (Auth::guest())
                    <a onclick="alert('To complete this payment, please login to your account')"
                        href="{{ url('/login') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                @else
                    <a href="{{ url('/checkout') }}" class="primary-btn">PROCEED TO CHECKOUT</a>
                @endif
            </div>
        </div>
    </div>
@else
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="delete-cart">
                <div class="shoping__cart__table">
                    <div id="change-item-cart">
                        <i class="cartnew-empty"></i>
                        <h2 style="text-align: center;padding:70px 0">Your Cart is Empty</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="{{ url('/') }}" class="primary-btn cart-btn ">SHOPPING
                        NOW</a>

                </div>
            </div>
            <div class=" col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">

                    </div>
                </div>
            </div>
            <div class="col-lg-6">

            </div>
        </div>
    </div>
@endif

<script> 
$(".edit-all").on("click", function() {
       var lists = [];
       $("table tbody tr td").each(function() {
           $(this).find("input").each(function() {
               var element = { key: $(this).data("id"), value: $(this).val() };
               lists.push(element);
           })
       });
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $.ajax({
           url: 'save-all',
           type: 'POST',
           data: {
               //    "_token": "{{ csrf_token() }}",
               "data": lists,
           }
       }).done(function(response) {
           location.reload();
           alertify.warning('Update successfully');
       });
   });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmmation</title>
</head>
<body>
    <p> Hi {{ $order->username}}</p>
    <p>Your order has been successfully placed.</p>
    <br>
    <table style="width: 600px; text-align: right;">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->orderItems as $item)
            <tr>
                <td>
                    <img src="{{ asset('img/products')}}/{{$item->product->image}}" width="100px" alt="">
                </td>
                <td>{{$item->product->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price * $item->quantity}}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3" style="border-top:1px solid #ccc"></td>
                <td style="font-size: 15px; font-weight: bold;">Shipping : Free Shipping</td>
            </tr>
            <tr>
            <td colspan="3"></td>
                <td style="font-size: 15px; font-weight: bold;">Total : ${{$order->total_money}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
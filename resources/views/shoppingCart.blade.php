<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    @if(Session::has('cart'))
        @foreach($cart['items'] as $productItem)
            <span>{{ $productItem['totalAmount'] }}</span>
            <strong>{{ $productItem['item']['name'] }}</strong>
            <span class="label"> €{{ $productItem['price'] }} </span>
            <!-- moet een dropdown button zijn -->
            <button type="button"> Add item </button>
            <hr>
        @endforeach
        <strong> Total: €{{ $cart['totalPrice'] }} </strong>
        <hr>
        <a href="{{ route('product.checkout') }}">
            <button type="button"> Order </button>
        </a>
    @else
        <h2> No items </h2>
    @endif
</body>
</html>

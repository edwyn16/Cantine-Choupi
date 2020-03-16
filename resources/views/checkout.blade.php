<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
</head>
<body>
@if (Session::has('success'))
    <div class="alert" role="alert">
        <p>{{ Session::get('success') }}</p>
    </div>
    @endif
    <h1> Payment Page </h1>
    <h4> Total: €{{ $cart }} </h4>

    <hr>

    <form action="/checkout" method="post">
        @csrf

        <label for="firstname"> Firstname </label> <br>
        <input type="text" name="firstname"> <br><br>

        <label for="lastname"> Lastname </label> <br>
        <input type="text" name="lastname"> <br><br>

        <label for="address"> Address </label> <br>
        <input type="text" name="address"> <br><br>

        <label for="city"> City </label> <br>
        <input type="text" name="city"> <br><br>

        <label for="email"> E-mail </label> <br>
        <input type="text" name="email"> <br><br>

        <label for="tel"> Telefoon </label> <br>
        <input type="text" name="tel"> <br><br>

        <hr>

        <label for="Payment">Choose a Payment option:</label> <br><br>
        <input type="radio" name="paymentOption" id="Cash"> Cash <br><br>
        <input type="radio" name="paymentOption" id="Ideal"> Ideal <br><br>
        <input type="radio" name="paymentOption" id="Visa"> Visa <br><br>
        <input type="radio" name="paymentOption" id="Mastercard"> Mastercard <br><br>
        <input type="radio" name="paymentOption" id="American Express"> Amercian Express

        <br><br>
            <button type="submit"> Pay Now </button>
    </form>
    @isset($message)
        <div class="alert alert-success">
            <strong>{{ $message }}</strong>
        </div>
    @endif
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
</head>
<body>
    <h1> Payment Page </h1>
    <h4> Total: €{{ $total }} </h4>

    <form action="{{ checkout }}" method="post">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="text" name="birthdate">

        <label for="Payment">Choose a Payment option:</label>
        <select id="payment" required>
            <option> Visa </option>
            <option> Mastercard </option>
            <option> American Express </option>
            <optgroup> Ideal
                <option> ING </option>
                <option> ABN AMRO </option>
                <option> RABO BANK </option>
                <option> ASN Bank </option>
                <option> KNAB </option>
                <option> Friesland Bank </option>
            </optgroup>
        </select>
    </form>
</body>
</html>

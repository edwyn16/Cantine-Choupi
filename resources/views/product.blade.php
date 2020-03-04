<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Cantine Choupi Products </h1>

    @foreach($product as $i)
        <li>
            {{$i->name}}
        </li>
    @endforeach

</body>
</html>


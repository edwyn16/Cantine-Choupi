<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Categories Prosducts</title>
</head>
<body>
    <h1> Cantine Choupi Categories Products </h1>

    <div class="navbar">
        <a href="/"> Home </a>
        <a href="/product">Products</a>
            <div class="dropdown">
                <button class="dropbtn"> Category
                    <i class="fa fa-caret-down"></i>
                </button>
            <div class="dropdown-content">
                @foreach($category as $cat)
                    <a href="{{ $cat->id }}"> {{ $cat->name }} </a>
                @endforeach
            </div>
        </div>
    </div>

    @foreach($categories->product as $sub)
        <p> {{ $sub->name }} </p>
        <p> {{ $sub->discription }} </p>
        <p> {{ $sub->price }} </p>
    @endforeach
</body>
</html>

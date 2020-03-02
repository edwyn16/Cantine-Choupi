<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Category</title>
</head>
<body>
    <h1> Cantine Choupi Categories </h1>

    <div class="navbar">
        <a href="/"> Home </a>
        <a href="/products">Products</a>
        <div class="dropdown">
            <button class="dropbtn"> Category
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                @foreach($categories as $cat)
                    <a href="categories/{{ $cat->id }}"> {{ $cat->name }} </a>
                @endforeach
            </div>
        </div>
    </div>

    @foreach($categories as $i)
        <p><a href="categories/{{ $i->id }}" > </a></p>
    @endforeach
</body>
</html>

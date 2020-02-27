<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1> Cantine Choupi </h1>
        @foreach($category as $i)
            <li>
                {{$i->name}}
            </li>
        @endforeach
</body>
</html>

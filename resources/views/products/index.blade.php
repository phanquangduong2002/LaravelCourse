<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index function of ProductsController</h1>
    {{-- <h2>Name: {{$name}}</h2> --}}
    @foreach ($product as $item)
        <h3>{{$item}}</h3>
    @endforeach
</body>
</html>
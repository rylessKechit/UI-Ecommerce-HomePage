<!DOCTYPE html>
<html>

<head>
    <title>Market</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/seller.css') }}">
    <meta charset="UTF-8">
</head>

<body>
    @foreach ($allSellers as $seller)
        <a href="products" class="btn">{{ $seller->name }}</a>
    @endforeach
</body>

</html>

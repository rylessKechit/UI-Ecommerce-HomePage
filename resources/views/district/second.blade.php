<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5d9332551.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/district.css') }}">
    <meta charset="UTF-8">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo"><a href="home"><i class="fas fa-store-alt"></i></a></div>
                <div class="menu">
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li><a href="sellers">Commercants</a></li>
                        <li><a href="products">Produits</a></li>
                    </ul>
                </div>
            </div>

            <br><br><br><br><br>

            <div class="titre">
                <h1>Commercants du 2e Arrondissement</h1>
            </div>

            <br><br><br><br><br><br><br><br>

            <div class="bouton">
                <ul>
                    @foreach ($allSecondSellers as $seller)
                        <li><a href="{{ route('product') }}" class="btn-rounded">{{ $seller->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>

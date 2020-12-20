@extends('layouts.app')


@section('content')
    <center>
        <h2>Ici Vous pouvez ajouter des commercants selon leur arrondissements et également ajouter des produits</h2>

        <a href="{{ route('select-district') }}" class="btn btn-primary mt-5 ml-5">Ajouter un commercant</a>
        <a href="{{ route('select-product') }}" class="btn btn-primary mt-5 ml-5">Ajouter un produit</a>
    </center>
@endsection

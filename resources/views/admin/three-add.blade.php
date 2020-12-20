@extends('layouts.app')


@section('content')

    <h2>Entrée  les informations concernant le produit</h2>

    <form action="{{ route('success-three') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" name="three-product-name" id="" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Prix</label>
            <input type="text" name="three-product-price" id="" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Place Order</button>
    </form>

@endsection

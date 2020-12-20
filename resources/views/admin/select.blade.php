@extends('layouts.app')

@section('content')
    <center>
        <div class="container">
            <h2>Selectionner le commercant qui sera le detenteur du produit</h2>

            <div class="row">

                @foreach ($allSellers as $seller)
                    <a href="{{ $seller->id }}-product" class="btn btn-primary mt-5 ml-5">{{ $seller->name }}</a>
                @endforeach
            </div>
        </div>
    </center>
@endsection

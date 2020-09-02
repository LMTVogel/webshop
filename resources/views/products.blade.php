@extends('layouts.app')

@section('content')
    <h1>Producten</h1>
    {{-- @if (count($products) > 1) --}}
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
            <div class="col-sm">
                <div class="card catCard" style="width: 18rem;">
                    <img src="{{$product->image}}" class="card-img-top cardImg" alt="...">
                    <div class="card-body row">
                        <h5 class="card-title col-6">{{$product->title}}</h5>
                        <small class="col-6">&euro; {{$product->price}}</small>
                        <a href="/products/{{$product->id}}" class="btn btn-primary col-12">Bekijk het product</a>
                    </div>      
                </div>
            </div>
        @endforeach
        </div>
    </div>
    {{-- @endif --}}
@endsection
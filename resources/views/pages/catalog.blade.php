@extends('layouts.app')

@section('title')
Catalogue
@endsection


@section('content')

@foreach ($products as $product)
            <form action="{{URL::to('/addBasket_action')}}" method="POST">
                {{ csrf_field() }}
             <div class="card">
               <center> <span class="title"> {{ $product->product_name }}</span></center>
               <center><img src="./img/{{ $product->product_img }}" alt=""></center>
              <center><div>{{ $product->product_description }}</div></center> 
              <center>{{ $product->product_price }} €</center>
            </div>
            <input type="hidden" value="{{ $product->ID_PRODUCT }}" name="ID_PRODUCT" id="ID_PRODUCT">
            <button type="submit">Ajouter au panier</button>
        </form>
        @endforeach

@endsection
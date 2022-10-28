@extends('layouts.app')

@section('title')
Panier
@endsection


@section('content')
<a href="{{route('panier.pdf')}}"><button>GENERER LE PDF</button></a>
 <?php $totalProduct = [] ?>
@foreach ($products as $product)
             <div class="card">
               <center> <span class="title"> {{ $product->product_name }}</span></center>
               <center><img src="./img/{{ $product->product_img }}" alt=""></center>
              <center><div>{{ $product->product_description }}</div></center> 
              <center>  {{$product->product_price}} €</center>
              <?php array_push($totalProduct, $product->product_price)  ?>
            </div>
        @endforeach
            <?php $totalProductDisplay = array_sum($totalProduct) ?>
        <center>Total: <?php echo($totalProductDisplay) ?>€</center>

        <form action="{{ route('make.payement') }}" method="POST">
          {{ csrf_field() }}
          <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="pk_test_51LxpG6A4wiSk7EXnDOrtJoyqKUgnxYZnWprlEO243AL96FXSt8sGu8KsiDErovt0FRSHcloaaS2jQMn7S8rfY1Kf00Q8Hg65Dd"
              data-name="Chocolat :" data-description="votre commande du panier" data-amount="{{ $totalProductDisplay * 100 }}"
              data-currency="eur"></script>
      </form>
@endsection
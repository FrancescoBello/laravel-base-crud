@extends('layout.app')

@section('content')
  <div class="container">


    <h1 >Dettagli Prodotto {{ $product->name }}</h1>
     <ul>
       <li><h4>{{ $product->name }}</h4> </li>
       <li>Memory :{{ $product->memory }}</li>
       <li>Description : {{ $product->description }}</li>
       <li>Availability :{{ $product->availability }}</li>
       <li>Price : {{ $product->price }}</li>
    </ul>

  </div>

@endsection

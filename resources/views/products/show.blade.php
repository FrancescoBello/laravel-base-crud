@extends('layout.app')

@section('content')
  <div class="container">


    <h1 >Dettagli Prodotto {{ $product->name }}</h1>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Memory</th>
          <th scope="col">Description</th>
          <th scope="col">Availability</th>
          <th scope="col">Price</th>
        
        </tr>
      </thead>
      <tbody>

        <tr>

          <th scope="row">{{ $product->id }}</th>
          <td> <h4> {{ $product->name }} </h4></td>
          <td>{{ $product->memory }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->availability }}</td>
          <td>{{ $product->price }}</td>


        </tr>



      </tbody>
    </table>

  </div>

@endsection

@extends('layout.app')

@section('content')
  <div class="container">
    <h1>Prodotti</h1>
    <a class="btn btn-primary" href="{{ route("products.create") }}">Add Product</a>

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
        @foreach ($products as $product )
        <tr>

          <th scope="row">{{ $product->id }}</th>
          <td> <a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->name }}</a> </td>
          <td>{{ $product->memory }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ $product->availability }}</td>
          <td>{{ $product->price }}</td>


        </tr>
          @endforeach


      </tbody>
    </table>

  </div>

@endsection

@extends('layout.app')

@section('content')
  <div class="container">
    <h1>Prodotti</h1>

    <ul>
      @foreach ($products as $product )
        <li>
          <h3>
            <a href="{{ route('products.show', ['product' => $product->id]) }}">
              {{ $product->name }}
            </a>
          </h3>

        </li>
        <li>
          Memory : {{ $product->memory }}
        </li>
        <li>
          Description : {{ $product->description }}
        </li>
        <li>
          Availability :{{ $product->availability }}
        </li>
        <li>
        Price :   {{ $product->price }}
        </li>

      @endforeach
    </ul>

  </div>

@endsection

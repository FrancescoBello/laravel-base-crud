@extends('layout.app')

@section('content')
  <div class="container">
    <h1>Prodotti</h1>

    <ul>
      @foreach ($products as $product )
        <li>
          <h3>
            <a href="#">
              {{ $product->name }}
            </a>
          </h3>
        </li>
        <li>
          {{ $product->memory }}
        </li>
        <li>
          {{ $product->description }}
        </li>
        <li>
          {{ $product->availability }}
        </li>
        <li>
          {{ $product->price }}
        </li>

      @endforeach
    </ul>

  </div>

@endsection

@extends('layout.app')

@section('content')
  <div class="container">
    <h1>Aggiungi prodotto</h1>



    <form method="POST" action="{{ route("products.store") }}">
      @csrf
  <div class="form-group">
    <label >Name</label>
    <input type="text"  class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label >Memory</label>
    <input type="text" class="form-control" name="memory" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" name="description" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label >Availability</label>
    <input type="text" class="form-control" name="availability" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label >Price</label>
    <input type="text" class="form-control" name="price" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">ADD</button>
</form>




  </div>

@endsection

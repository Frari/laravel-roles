@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card" style="width: 18rem;">
      <div class="card-header">
        Prodotto ID: {{$product->id}}
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Nome: {{$product->name}}</li>
        <li class="list-group-item">Descrizione: {{$product->description}}</li>
        <li class="list-group-item">Prezzo: {{$product->price}}</li>
      </ul>
    </div>
    <a class="btn btn-primary mt-3" href="{{route('products.index')}}">Torna alla Home</a>
  </div>
@endsection

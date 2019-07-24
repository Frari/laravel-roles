@extends('layouts.app')

@section('content')

  <div class="container">
    <h1 class="pull-left">TUTTI I PRODOTTI</h1>
    <a href="{{route('products.create')}}" class="pull-right btn btn-primary">Inserisci nuovo prodotto</a>
    <table class="table mt-5">
      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>DESCRIPTION</th>
          <th>PRICE</th>
          <th>ACTIONS</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($products as $product)
          <tr>
            <th>{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
              <a class="btn btn-info" href="{{route('products.show', $product->id)}}">View</a>
              <a class="btn btn-warning" href="{{route('products.edit', $product->id)}}">Edit</a>
              <form action="{{route('products.destroy', $product->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn btn-danger" value="delete">
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5">
              Non ci sono prodotti.
            </td>
          </tr>

        @endforelse

      </tbody>
    </table>
  </div>
@endsection

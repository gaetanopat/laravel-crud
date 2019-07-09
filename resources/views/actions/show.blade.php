@extends('layouts.base')

@section('page_title', 'Visualizzazione prodotto')

@section('content')
  <section class="show_single_product">
    <div class="container">
      <div class="card" style="width: 19rem;">
        <div class="card-body">
          <h5 class="card-title">Prodotto: {{ $product->id }}</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Nome prodotto:</strong> {{ $product->name }}</li>
          <li class="list-group-item"><strong>Descrizione:</strong> {{ $product->description }}</li>
          <li class="list-group-item"><strong>Categoria:</strong> {{ $product->category }}</li>
          <li class="list-group-item"><strong>Prezzo:</strong> {{ $product->price }}</li>
          <li class="list-group-item"><strong>Prezzo scontato:</strong>
            @if($product->sale_price)
              {{ $product->sale_price }}
            @else
              -
            @endif
          </li>
        </ul>
        <div class="card-body">
          <a href="" class="card-link">Modifica prodotto</a>
          <a href="{{ route('products.index') }}" class="card-link">Torna alla Home</a>
        </div>
      </div>
    </div>
  </section>
@endsection

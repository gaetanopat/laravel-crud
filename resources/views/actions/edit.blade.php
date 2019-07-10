@extends('layouts.base')

@section('page_title', 'Modifica prodotto')

@section('content')
  <section class="show_single_product">
    <div class="container">
      <h4>Modifica prodotto</h4>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ route('products.update', $product->id) }}" method="post" id="#edit_product_form">
        @method('PUT')
        @csrf
        <div class="form-group row">
          <label class="col-5 col-form-label">Nome prodotto: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci nome prodotto" name="name" value="{{ old('name', $product->name) }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Descrizione: </label>
          <div class="col-7">
            <textarea class="form-control" placeholder="Inserisci descrizione" name="description">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Categoria: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci categoria" name="category" value="{{ old('category', $product->category) }}">
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Prezzo: </label>
          <div class="col-7">
            <input type="number" step="any" class="form-control" placeholder="Inserisci il prezzo del prodotto" name="price" value="{{ old('price', $product->price) }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Prezzo scontato: </label>
          <div class="col-7">
            <input type="number" step="any" class="form-control" placeholder="Inserisci il prezzo scontato" name="sale_price" value="{{ old('sale_price', $product->sale_price) }}">
          </div>
        </div>
        <div class="form-group text-center">
          <input type="submit" value="Aggiorna" class="btn btn-primary mr-2">
          <a href="{{ route('products.index') }}" class="btn btn-primary">Torna alla Home</a>
        </div>
      </form>
    </div>
  </section>
@endsection

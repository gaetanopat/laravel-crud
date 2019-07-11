@extends('layouts.base')

@section('page_title', 'Creazione prodotto')

@section('content')
  <section class="show_single_product">
    <div class="container">
      <h4>Creazione nuovo prodotto</h4>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="{{ route('products.store') }}" method="post" id="create_product_form">
        @csrf
        <div class="form-group row">
          <label class="col-5 col-form-label">Nome prodotto: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci nome prodotto" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Descrizione: </label>
          <div class="col-7">
            <textarea class="form-control" placeholder="Inserisci descrizione" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Categoria: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci categoria" name="category" value="{{ old('category') }}">
            @error('category')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Prezzo: </label>
          <div class="col-7">
            <input type="number" step="any" class="form-control" placeholder="Inserisci il prezzo del prodotto" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Prezzo scontato: </label>
          <div class="col-7">
            <input type="number" step="any" class="form-control" placeholder="Inserisci il prezzo scontato" name="sale_price" value="{{ old('sale_price') }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group text-center">
          <input type="submit" value="Crea" class="btn btn-primary mr-2">
          <a href="{{ route('products.index') }}" class="btn btn-primary">Torna alla Home</a>
        </div>
      </form>
    </div>
  </section>
@endsection

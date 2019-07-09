@extends('layouts.base')

@section('page_title', 'Creazione prodotto')

@section('content')
  <section class="show_single_product">
    <div class="container">
      <h4>Creazione nuova stanza</h4>

      <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <label class="col-5 col-form-label">Nome prodotto: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci nome prodotto" name="name">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Descrizione: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci descrizione" name="description">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Categoria: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci categoria" name="category">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Prezzo: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci il prezzo del prodotto" name="price">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-5 col-form-label">Prezzo scontato: </label>
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Inserisci il prezzo scontato" name="sale_price">
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

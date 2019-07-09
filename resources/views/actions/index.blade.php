@extends('layouts.base')

@section('page_title', 'Visualizzazione Prodotti')

@section('content')
  <section class="show_all_products">
    <div class="container">
      <h3 class="float-left">Visualizzazione prodotti</h3>
      <a href="{{ route('products.create') }}" class="btn btn-primary float-right">Crea nuovo prodotto</a>

      <table>
        <tr>
          <th class="text-center">ID prodotto</th>
          <th class="text-center">Nome</th>
          <th class="text-center">Descrizione</th>
          <th class="text-center">Categoria</th>
          <th class="text-center">Prezzo</th>
          <th class="text-center">Prezzo scontato</th>
          <th class="text-center">Actions</th>
        </tr>
        @forelse ($products as $product)
        <tr>
          <td class="text-center"><strong>{{ $product->id }}</strong></td>
          <td class="text-center">{{ $product->name }}</td>
          <td class="text-center">{{ $product->description }}</td>
          <td class="text-center">{{ $product->category }}</td>
          <td class="text-center">{{ $product->price }}</td>
          <td class="text-center">
            @if ($product->sale_price)
              {{ $product->sale_price }}
            @else
              -
            @endif
          </td>
          <td class="text-center"><a href="{{ route('products.show', $product->id) }}">Visualizza</a> - <a href="actions/edit.php?id=">Modifica</a> -
            <form class="form_delete" action="actions/delete.php" method="post">
              <input type="hidden" value="" name="id">
              <input type="submit" name="" value="Cancella">
            </form>
          </td>
        </tr>
    @empty
      <tr>
        <td colspan="6" class="no_products"><h1>Non ci sono prodotti</h1></td>
      </tr>
    @endforelse
      </table>

    </div>
  </section>
@endsection

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      return view('actions.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('actions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|max:255|bail',
        'description' => 'required',
        'category' => 'required',
        'price' => 'required|numeric|between:0,9999.99',
        'sale_price' => 'nullable|numeric|min:0|lt:price'
      ]);
      $dati = $request->all();
      $new_product = new Product();
      $new_product->fill($dati);
      $new_product->save();
      return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
      // se non ci fosse Product metterei $product = Product::find($product_id);
      // se qualcuno inserisce un qualcosa diverso dall'id del prodotto gli ritorno la pagina 404 not found
      if(empty($product)){
        abort(404);
      }
      return view('actions.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      if(empty($product)){
        abort(404);
      }
      return view('actions.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $validatedData = $request->validate([
        'name' => 'required|max:255|bail',
        'description' => 'required',
        'category' => 'required',
        'price' => 'required|numeric|between:0,9999.99',
        'sale_price' => 'nullable|numeric|min:0|lt:price'
      ]);
      $dati = $request->all();
      // $prodotto = Product::find($product);
      $product->update($dati);
      return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      // $prodotto = Product::find($product);
      $product->delete();
      return redirect()->route('products.index');
    }
}

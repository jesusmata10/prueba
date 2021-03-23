<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Product::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Product::store($request->all());

            return [
                'status' => 200,
                'descriptiom' => 'Producto creado'
            ];
        } catch (QueryException $e) {
            return [
                'status' => 409,
                'descriptiom' => 'No se ha podido guardar el producto',
                'error' => $e
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return response()->json($product);
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
        try {
            Product::updatee($request->all(), $product->id);

            return [
                'status' => 200,
                'descriptiom' => 'Producto actualizado'
            ];
        } catch (QueryException $e) {
            return [
                'status' => 409,
                'descriptiom' => 'No se ha podido actualizar el producto',
                'error' => $e
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            Product::deletee($product->id);

            return [
                'status' => 200,
                'descriptiom' => 'Producto eliminado'
            ];
        } catch (QueryException $e) {
            return [
                'status' => 409,
                'descriptiom' => 'No se ha podido eliminar el producto',
                'error' => $e
            ];
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public  function index(){
        return Products::all();
    }
    public function show(Products $product){
        return $product;
    }
    public function store(Request $request){
        $product = Products::create($request->all());
        return response()->json($product, 201);
    }
    public function update(Request $request, Products $product){
        $product->update($request->all());
        return response()->json($product, 200);
    }
    public function delete(Request $request, Products $product){
        $product->delete();
        return response()->json(null, 204);
    }
}

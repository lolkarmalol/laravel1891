<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    

    public function index(){

        $products = product::orderBy('id','desc')->get();
        return view('product.listar',compact('products'));


    }


    public function create(){

        return view('product.frm_producto');

    }

    public function store(Request $request){

    


        $product = new Product();

        $product->name=$request->name;
        $product->price=$request->price;
        $product->descripcion=$request->descripcion;
        $product->cantidad=$request->cantidad;
        $product->fecha=$request->fecha;

        $product->save();

        return $product;

    }



}

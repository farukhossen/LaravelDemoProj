<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('productShow', ['products'=>$products]);

    }

    public function new(){

        return view('productCreate');
    }

    public function create(Request $req){

            $prod = new Product;
            $prod->title = $req->title;
            $prod->detail = $req->detail;
            $prod->price = $req->price;
            $prod->save();
            return redirect('show');

    }

    public function edit($id){
        $prod = Product::find($id);
       return view('productEdit',['product'=>$prod]);

    }

    public function update(Request $req){

        $prod = Product::find($req->id);
        $prod->title = $req->title;
        $prod->detail = $req->detail;
        $prod->price = $req->price;
        $prod->save();
        return redirect('show');

    }

    public function destroy($id){
        $prod = Product::find($id);
        $prod->delete();
        return redirect('show');

    }
}

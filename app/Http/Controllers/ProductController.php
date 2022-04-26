<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Protype;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        //gET protype
        $protype = Protype::all();
        //Get product
        $products = Product::join('protypes','protypes.id','=','products.type_id')
        ->where('price','>','15')
        ->where('price','<','50')
        ->get();
        //Get 10 new products
        $get10Products = Product::orderBy('created_at', 'desc')->take(10)->get();

        return view('index',
        [
            'getProtypes'=>$protype,
            'getProducts'=>$products,
            'getNewProduct'=>$get10Products
        ]);
    }
}

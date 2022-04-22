<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view('index',['getProduct'=>$products]);
    }
    function getNew10Product(){
        $products = Product::limit(10)->orderBy('created_at', 'desc')->get();
        return view('index',['getNewProduct'=>$products]);
    }
}

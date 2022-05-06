<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Protype;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(){
        //get all protype
        $protype = Protype::all();

        //Get product to filter
        $products = Product::select('*','products.name AS product_name', 'products.id AS product_id')
        ->leftJoin('protypes','protypes.id','=','products.type_id')
        ->where('featured','=','1')
        ->orderBy('products.name', 'desc')
        ->take(20)
        ->get();

        //Get 10 new products
        $get10Products = Product::orderBy('created_at', 'desc')->take(10)->get();

        //Get latest products
        $latestProduts = Product::orderBy('created_at', 'asc')->take(6)->get();

        //Get low price produts
        $lowPriceProducts = Product::orderBy('price', 'asc')->take(6)->get();

        //Get high price produts
        $highPriceProducts = Product::orderBy('price', 'desc')->take(6)->get();

        //return
        return view('index',
        [
            'getProtypes'=>$protype,
            'getProducts'=>$products,
            'getNewProduct'=>$get10Products,
            'getLatestProduct'=>$latestProduts,
            'getLowPriceProduct'=>$lowPriceProducts,
            'getHighPriceProduct'=>$highPriceProducts,
        ]);
    }
    function product_detail($id){
        //View product detail
        $detail = Product::find($id);
        $type = Product::select('protypes.name')->join('protypes','protypes.id','=','products.type_id')
        ->where('products.id',$id)
        ->get()->toArray();

        //return
        return view('shop-details', 
        [
            'productDetail'=>$detail,
            'getType'=>$type,
        ]);
    }
    function drid(Request $request){
        //Get product
        $url = $request->path();
        $type = explode('/', $url);
        // Get all protype
        $protypes = Protype::all();
         //Get latest products
         $latestProduts = Product::orderBy('created_at', 'asc')->take(6)->get();
        //Get 15 new products
        if(isset($type[1])){
            $product = Product::orderBy('id', 'desc')->where('type_id',$type[1])->paginate(6);
            // $name = Protype::select('name')->where('id',$type[1])->get();
        }else{
        $product = Product::orderBy('id', 'desc')->paginate(6);
        // $name = Protype::select('name')->where('id',$type[1])->get();
        }
        return view('shop-grid',
        [
            'getProtypes'=>$protypes,
            'getProducts'=>$product,
            // 'getname'=>$name,
            'getLatestProduct'=>$latestProduts,
        ]);
    }
}
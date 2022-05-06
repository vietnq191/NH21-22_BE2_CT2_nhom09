<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Protype;
use App\Category;
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
<<<<<<< Updated upstream
            'getNewProduct'=>$get10Products
=======
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
>>>>>>> Stashed changes
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
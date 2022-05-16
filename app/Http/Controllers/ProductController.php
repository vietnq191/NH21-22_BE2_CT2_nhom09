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
        // Get product by prince
        $orderprice=isset($_GET['field'] )? $_GET['field']:"name";
        $ordersort=isset($_GET['sort'] )? $_GET['sort']:"desc";
         //Get latest products
        $latestProduts = Product::orderBy('created_at', 'asc')->take(6)->get();
        //Get price
        $min = isset($_GET['Min'])? $_GET['Min']:"0";
        $max = isset($_GET['Max'])? $_GET['Max']:"500";
        //Get 9 new products
        if(isset($type[1])){
            $product = Product::orderBy($orderprice, $ordersort)->where('type_id',$type[1])->whereBetween('price',[$min,$max])->paginate(9);
            $count = Product::orderBy($orderprice, $ordersort)->where('type_id',$type[1])->whereBetween('price',[$min,$max])->get();
             //price Min,Max product
            $minProduct=Product::where('type_id',$type[1])->min('price');
            $maxProduct=Product::where('type_id',$type[1])->max('price');
        } else {
        $product = Product::orderBy($orderprice, $ordersort)->whereBetween('price',[$min,$max])->paginate(9);
        $count = Product::orderBy($orderprice, $ordersort)->whereBetween('price',[$min,$max])->get();
        //price Min,Max product
        $minProduct=Product::min('price');
        $maxProduct=Product::max('price');
        }
        return view('shop-grid',
        [
            'countAllProduct'=>$count,
            'getProtypes'=>$protypes,
            'getProducts'=>$product,
            'getLatestProduct'=>$latestProduts,
            'type'=>$type,
            'minproduct'=>$minProduct,
            'maxproduct'=>$maxProduct,
        ]);
    }
}
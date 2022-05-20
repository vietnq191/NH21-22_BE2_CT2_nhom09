<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Protype;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index()
    {
        //get all protype
        $protype = Protype::all();

        //Get product to filter
        $products = Product::select('*', 'products.name AS product_name', 'products.id AS product_id')
            ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
            ->where('featured', '=', '1')
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
        return view(
            'index',
            [
                'getProtypes' => $protype,
                'getProducts' => $products,
                'getNewProduct' => $get10Products,
                'getLatestProduct' => $latestProduts,
                'getLowPriceProduct' => $lowPriceProducts,
                'getHighPriceProduct' => $highPriceProducts,
            ]
        );
    }
    function product_detail($id)
    {
        //get all protype
        $protype = Protype::all();

        //View product detail
        $detail = Product::find($id);
        $type = Product::select('protypes.name')->join('protypes', 'protypes.id', '=', 'products.type_id')
            ->where('products.id', $id)
            ->get()->toArray();

        //return
        return view(
            'shop-details',
            [
                'getProtypes' => $protype,
                'productDetail' => $detail,
                'getType' => $type,
            ]
        );
    }
    function drid(Request $request)
    {
        //Get product
        $url = $request->path();
        $type = explode('/', $url);

        // Get all protype
        $protypes = Protype::all();

        //Get latest products
        $latestProduts = Product::orderBy('created_at', 'asc')->take(6)->get();

        //Get 6 products
        if (isset($type[1])) {
            $product = Product::orderBy('id', 'desc')->where('type_id', $type[1])->paginate(6);
        } else {
            $product = Product::orderBy('id', 'desc')->paginate(6);
        }
        return view(
            'shop-grid',
            [
                'getProtypes' => $protypes,
                'getProducts' => $product,
                'getLatestProduct' => $latestProduts,
            ]
        );
    }

    function getSearch(Request $request)
    {
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
        } else {
        $product = Product::orderBy('id', 'desc')->paginate(6);
        // $name = Protype::select('name')->where('id',$type[1])->get();
            $product = Product::orderBy('id', 'desc')->where('type_id',$type[1])->paginate(9);
        } else {
        $product = Product::orderBy('id', 'desc')->paginate(9);

        // Get product by prince
        $orderprice=isset($_GET['field'] )? $_GET['field']:"price";
        $ordersort=isset($_GET['sort'] )? $_GET['sort']:"desc";

        //Get price
        $min = isset($_GET['Min'])? $_GET['Min']:"0";
        $max = isset($_GET['Max'])? $_GET['Max']:"500";

        //Get 6 products
        if (isset($type[1])) {
            $product = Product::orderBy('id', 'desc')->where('type_id', $type[1])->paginate(6);
        } else {
            $product = Product::orderBy('id', 'desc')->paginate(6);
        }
<<<<<<< Updated upstream
        // $productsearch = Product::where('name', 'like', '%' . $request->key . '%')
        //     // ->orWhere('type_id', 'like', '%' . $request->key . '%')
        //     ->Join('protypes', 'protypes.id', '=', 'products.type_id')
        //     ->get();
        $productsearch = Product::select('*', 'products.name', 'products.price')
            ->join('protypes', 'protypes.id', '=', 'products.type_id')
            ->where('products.name', 'like', '%' . $request->key . '%')
            ->orWhere('products.price', 'like', '%' . $request->key . '%')
            ->orWhere('protypes.name', 'like', '%' . $request->key . '%')
            ->get();
=======

        $productsearch = Product::select('*', 'products.name AS product_name', 'products.id AS product_id')
        ->join('protypes', 'protypes.id', '=', 'products.type_id')
        ->where('products.name', 'like', '%' . $request->key . '%')
        ->orWhere('products.price', 'like', '%' . $request->key . '%')
        ->orWhere('protypes.name', 'like', '%' . $request->key . '%')
        ->paginate(9);

        //Count product
        $count = Product::orderBy($orderprice, $ordersort)
            ->where('products.name', 'like', '%' . $request->key . '%')
            ->whereBetween('price',[$min,$max])
            ->get();
        
            //price Min,Max product
        $minProduct=Product::min('price');
        $maxProduct=Product::max('price');

        //Get sale off
        $saleOff = Product::select('*', 'products.name AS product_name', 'products.id AS product_id')
        ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
        ->where('sales','>','0')
        ->orderBy('sales','desc')
        ->take(9)
        ->get();
>>>>>>> Stashed changes

        return view(
            'search',
            [
                'countAllProduct'=>$count,
                'getProtypes' => $protypes,
                'getProducts' => $product,
                'getLatestProduct' => $latestProduts,
                'productsearch' => $productsearch,
                'request' => $request,
<<<<<<< Updated upstream
=======
                'saleOff' => $saleOff,
                'minproduct'=>$minProduct,
                'maxproduct'=>$maxProduct,
>>>>>>> Stashed changes
            ]
        );
    }
}

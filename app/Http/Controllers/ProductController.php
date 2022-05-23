<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Protype;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Cart;

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
        $lowPriceProducts = Product::select('*', DB::raw('price - price*sales/100 AS price_discount'))->orderBy('price_discount', 'asc')->take(6)->get();

        //Get high price produts
        $highPriceProducts = Product::select('*', DB::raw('price - price*sales/100 AS price_discount'))->orderBy('price_discount', 'desc')->take(6)->get();

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
        //View product detail
        $detail = Product::find($id);
        $type = Product::select('protypes.name')->join('protypes', 'protypes.id', '=', 'products.type_id')
            ->where('products.id', $id)
            ->get()->toArray();
        $products = Product::select('*', 'products.name AS product_name', 'products.id AS product_id')
            ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
            ->where('featured', '=', '1')
            ->orderBy('products.name', 'desc')
            ->take(20)
            ->get();
        //return
        return view(
            'shop-details',
            [
                'productDetail' => $detail,
                'getType' => $type,
                'getProducts' => $products,
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

        // Get product by prince
        $orderprice = isset($_GET['field']) ? $_GET['field'] : "price";
        $ordersort = isset($_GET['sort']) ? $_GET['sort'] : "desc";

        //Get latest products
        $latestProduts = Product::orderBy('created_at', 'asc')->take(6)->get();

        //Get price
        $min = isset($_GET['Min']) ? $_GET['Min'] : "0";
        $max = isset($_GET['Max']) ? $_GET['Max'] : "500";

        //Get 9 new products
        if (isset($type[1])) {
            if ($orderprice == "price") {
                $product = Product::select('*', 'products.name AS product_name', 'products.id AS product_id', DB::raw('price - price*sales/100 AS price_discount'))
                    ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
                    ->orderBy('price_discount', $ordersort)
                    ->where('type_id', $type[1])
                    ->whereBetween('price', [$min, $max])
                    ->paginate(9);
            } else {
                $product = Product::select('*', 'products.name AS product_name', 'products.id AS product_id', DB::raw('price - price*sales/100 AS price_discount'))
                    ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
                    ->orderBy($orderprice, $ordersort)
                    ->where('type_id', $type[1])
                    ->whereBetween('price', [$min, $max])
                    ->paginate(9);
            }

            $count = Product::orderBy($orderprice, $ordersort)
                ->where('type_id', $type[1])
                ->whereBetween('price', [$min, $max])
                ->get();

            //price Min,Max product
            $minProduct = Product::where('type_id', $type[1])
                ->min('price');
            $maxProduct = Product::where('type_id', $type[1])
                ->max('price');
        } else {
            if ($orderprice == "price") {
                $product = Product::select('*', 'products.name AS product_name', 'products.id AS product_id', DB::raw('price - price*sales/100 AS price_discount'))
                    ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
                    ->orderBy('price_discount', $ordersort)
                    ->whereBetween('price', [$min, $max])
                    ->paginate(9);
            } else {
                $product = Product::select('*', 'products.name AS product_name', 'products.id AS product_id', DB::raw('price - price*sales/100 AS price_discount'))
                    ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
                    ->orderBy($orderprice, $ordersort)
                    ->whereBetween('price', [$min, $max])
                    ->paginate(9);
            }

            $count = Product::orderBy($orderprice, $ordersort)
                ->whereBetween('price', [$min, $max])
                ->get();

            //price Min,Max product
            $minProduct = Product::min('price');
            $maxProduct = Product::max('price');
        }

        //Get sale off
        $saleOff = Product::select('*', 'products.name AS product_name', 'products.id AS product_id')
            ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
            ->where('sales', '>', '0')
            ->orderBy('sales', 'desc')
            ->take(9)
            ->get();

        return view(
            'shop-grid',
            [
                'countAllProduct' => $count,
                'getProtypes' => $protypes,
                'getProducts' => $product,
                'getLatestProduct' => $latestProduts,
                'saleOff' => $saleOff,
                'type' => $type,
                'minproduct' => $minProduct,
                'maxproduct' => $maxProduct,
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

        return view(
            'search',
            [
                'countAllProduct'=>$count,
                'getProtypes' => $protypes,
                'getProducts' => $product,
                'getLatestProduct' => $latestProduts,
                'productsearch' => $productsearch,
                'request' => $request,
                'saleOff' => $saleOff,
                'minproduct'=>$minProduct,
                'maxproduct'=>$maxProduct,

            ]
        );
    }
    public function getAddToCart(Request $request, $id)
    {
        $protypes = Protype::all();
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
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);

        return view('cart');
    }
    public function getCart()
    {
        $protypes = Protype::all();
        if (!Session::has('cart')) {
            return view('shopping-cart', [
                'getProtypes' => $protypes,
            ]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart', [
            'getProtypes' => $protypes,
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice,
        ]);
    }

    public function deleteItemCart(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->deleteItem($id);

        if (Count($newCart->items) > 0) {
            $request->session()->put('cart', $newCart);
        } else {
            $request->session()->forget('cart');
        }
        return view('deleteCart');
    }


    public function saveAllItemCart(Request $request)
    {
        foreach ($request->data as $item) {
            $oldCart = Session('cart') ?  Session('cart') : null; // cart current
            $newCart = new Cart($oldCart);
            $newCart->updateAllCart($item['key'],$item['value']);
            $request->Session()->put('cart', $newCart);
        }
    }

    public function checkOut()
    {
        $protypes = Protype::all();
        return view('checkout', [
            'getProtypes' => $protypes,
        ]);
    }

    public function saveCheckOut(Request $request)
    {
        $data = array();
        $data['user_id'] = auth()->user()->id;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['order_date'] = $request->order_date;
        $data['username'] = $request->username;
        if ($data['total_money'] = Session::get('cart')->totalPrice > 99) {
            $data['total_money'] = Session::get('cart')->totalPrice;
        } else {
            $data['total_money'] = Session::get('cart')->totalPrice + 10;
        }
        $id = DB::table('orders')->insertGetId($data);
        Session::put('id', $id);
        foreach ((array) Session::get('cart')->items as $product) {
            $data = array();
            $data['order_id'] = $id;
            $data['product_id'] = $product['item']->id;
            $data['quantity'] = $product['qty'];

            $data['price'] = $product['price'];
            DB::table('orders_list')->insertGetId($data);
        }

        $request->session()->forget('cart');
        $request->session()->flash('alert-success', 'Order payment successful');
        return redirect('/');
    }
}

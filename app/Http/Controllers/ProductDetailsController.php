<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use Share;
use App\Models\Rating;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Contracts\Session\Session;

class ProductDetailsController extends Controller
{
    function product_detail($id)
    {
        //get all protype
        $protype = Protype::all();

        //View product detail
        $detail = Product::find($id);

        //Type of product
        $type = Product::select('protypes.name', 'protypes.id')->join('protypes', 'protypes.id', '=', 'products.type_id')
            ->where('products.id', $id)
            ->get()->toArray();

        //Share social media
        $url = "http://127.0.0.1:8000/shop-details/" . $detail->id;
        $socialShare = Share::page($url, $detail->name)
            ->facebook()
            ->twitter()
            ->telegram()
            ->pinterest()
            ->getRawLinks();

        //Related product
        $relatedProduct = Product::select('*', 'products.name AS product_name', 'products.id AS product_id')
            ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
            ->whereNotIn('products.id', [$id])
            ->where('products.type_id', $detail->type_id)
            ->take(9)
            ->get();


        //Tinh trung binh sao
        $ratingAvg =  DB::table('ratings')->where('product_id', $id)->avg('rating_value');
        $ratingAvg = round($ratingAvg);
        //Dem so luong danh gia
        $countRating = DB::table('ratings')->where('product_id', $id)->count();
        // Xuat thong tin danh gia
        $getRating = DB::table('ratings')->join('users', 'user_id', '=', 'users.id')
            ->where('product_id', $id)->orderBy('date', 'DESC')->paginate(3);

        // Kiem tra mua hang
        if (isset(auth()->user()->id)) {
            $checkPurchase = DB::table('orders')->join('orders_list', 'id', '=', 'order_id')
                ->where('orders.user_id', auth()->user()->id)
                ->where('orders_list.product_id', $id)->get();
            return view(
                'shop-details',
                [
                    'getProtypes' => $protype,
                    'productDetail' => $detail,
                    'getType' => $type,
                    'shareSocial' => $socialShare,
                    'relatedProduct' => $relatedProduct,
                    'ratingAvg' => $ratingAvg,
                    'countRating' => $countRating,
                    'getRating' => $getRating,
                    'checkPurchase' => $checkPurchase,
                ]
            );
        } else {
            $checkPurchase = 0;
            return view(
                'shop-details',
                [
                    'getProtypes' => $protype,
                    'productDetail' => $detail,
                    'getType' => $type,
                    'shareSocial' => $socialShare,
                    'relatedProduct' => $relatedProduct,
                    'ratingAvg' => $ratingAvg,
                    'countRating' => $countRating,
                    'getRating' => $getRating,
                    'checkPurchase' => $checkPurchase,
                ]
            );
        }
    }
    public function addRating(Request $request)
    {
        //Dem so lan user danh gia cung 1 san pham (1 ng chi dc danh gia 1 lan)
        $rated = DB::table('ratings')
            ->where('user_id', auth()->user()->id)
            ->where('product_id', $request->product_id)->count();
        // DB::enableQueryLog();

        // dd(DB::getQueryLog());

        if ($rated > 0) {
            return redirect()->back()->with('failed', '');
        } else {
            $data['product_id'] = $request->product_id;
            $data['user_id'] = auth()->user()->id;
            $data['rating_value'] = $request->star;
            $data['comment'] = $request->review;

            DB::table('ratings')->insertGetId($data);
            return redirect()->back()->with('successful', '');
        }
    }
}

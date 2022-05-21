<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use Share;

class ProductDetailsController extends Controller
{
    function product_detail($id)
    {
        //get all protype
        $protype = Protype::all();

        //View product detail
        $detail = Product::find($id);

        //Type of product
        $type = Product::select('protypes.name','protypes.id')->join('protypes', 'protypes.id', '=', 'products.type_id')
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

        // DD($socialShare);
        //return
        return view(
            'shop-details',
            [
                'getProtypes' => $protype,
                'productDetail' => $detail,
                'getType' => $type,
                'shareSocial' => $socialShare,
                'relatedProduct' => $relatedProduct,
            ]
        );
    }
}

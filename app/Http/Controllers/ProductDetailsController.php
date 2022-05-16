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

        // DD($socialShare);
        //return
        return view(
            'shop-details',
            [
                'getProtypes' => $protype,
                'productDetail' => $detail,
                'getType' => $type,
                'shareSocial' => $socialShare,
            ]
        );
    }
}

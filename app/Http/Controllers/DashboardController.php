<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    function index() {
        $product = Product::all();

        $emails = DB::Table('email_newsletter')->get();
            
        $orders = DB::Table('orders')->get();

        $newsOrder = DB::Table('orders')->whereDate('order_date', Carbon::today())->get();

        $chart = DB::select(DB::raw("SELECT `protypes`.`name`, count(*) as quantity from `protypes` JOIN `products` on `products`.`type_id` = `protypes`.`id` GROUP BY `protypes`.`name`"));
        $data = "";
        foreach($chart as $value) {
            $data.="['".$value->name."', ".$value->quantity."],";
        }
        return view('dashboard',[
            'product' => $product,
            'emails' => $emails,
            'orders' => $orders,
            'newsOrder' => $newsOrder,
            'dataChart' => $data,
        ]);
    }

    function newOder() {
        $newsOrder = DB::Table('orders')->whereDate('order_date', Carbon::today())->orderBy('order_date', 'desc')->get();

        return view('admin-new-order',[
            'newsOrder' => $newsOrder,
        ]);
    }
}

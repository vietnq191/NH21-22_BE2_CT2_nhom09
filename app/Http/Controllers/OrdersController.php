<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdersController extends Controller
{
    function index() {
        $orders = DB::Table('orders')->OrderBy('order_date', 'desc')->paginate(10);
        return view('admin-view-orders', [
            'orders' => $orders,
        ]);
    }

    function find($id){
        $order = DB::Table('orders')->where('id', $id)->get();
        $list_orders = DB::Table('orders_list')->join('products','product_id','id')->where('order_id', $id)->get();
        if(count($order) == 0) {
            return redirect()->back();
        }
        if(count($list_orders) == 0) {
            return redirect()->back();
        }

        return view('admin-view-details-order', [
            'order' => $order,
            'list_orders' => $list_orders,
        ]);
    }
}

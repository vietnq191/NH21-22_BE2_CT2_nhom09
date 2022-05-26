<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Protype;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
class AdminProductController extends Controller
{
    //
    function product()
    {
        $product = $product = Product::select('*','protypes.name AS protype_name', 'products.name AS product_name', 'products.id AS product_id', DB::raw('price - price*sales/100 AS price_discount'))
        ->leftJoin('protypes', 'protypes.id', '=', 'products.type_id')
        ->paginate(5);
        return view('admin-product', [
            'product' => $product,
        ]);
    }
    function add()
    {
        $protype = Protype::all();
        return view('admin-addProduct', [
            'allprotype' => $protype,
        ]);
    }
    function addproduct(Request $request)
    {
        if($request->has('image1')){
            $file = $request->image1;
            //get name file
            $file_name1 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name1);
        }
        if($request->has('image2')){
            $file = $request->image2;
            //get name file
            $file_name2 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name2);
        }
        if($request->has('image3')){
            $file = $request->image3;
            //get name file
            $file_name3 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name3);
        }
        if($request->has('image4')){
            $file = $request->image4;
            //get name file
            $file_name4 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name4);
        }
        DB::Table('products')->insert(['name'=>$request->name,
        'type_id'=>$request->type,
        'price'=>$request->price,
        'image1'=>$file_name1,
        'image2'=>$file_name2,
        'image3'=>$file_name3,
        'image4'=>$file_name4,
        'description'=>$request->description,
        'infomation'=>$request->infomation,
        'weight'=>$request->weight,
        'sales'=>$request->sales,
        'featured'=>$request->featured]);
        return redirect()->route('admin.listproduct')->with('success','Add Success');
    }
    function edit($id)
    {
        $protype = Protype::all();
        $product=Product::where('id',$id)->get();
        return view('admin-editProduct',[
            'product' => $product,
            'allprotype' => $protype,
        ]);
    }
    function update(Request $request)
    {
        if($request->has('image1')){
            $file = $request->image1;
            //get name file
            $file_name1 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name1);
            DB::Table('products')->where('id',$request->id)->update(['image1'=>$file_name1]);
        }
        if($request->has('image2')){
            $file = $request->image2;
            //get name file
            $file_name2 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name2);
            DB::Table('products')->where('id',$request->id)->update(['image2'=>$file_name2]);
        }
        if($request->has('image3')){
            $file = $request->image3;
            //get name file
            $file_name3 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name3);
            DB::Table('products')->where('id',$request->id)->update(['image3'=>$file_name3]);
        }
        if($request->has('image4')){
            $file = $request->image4;
            //get name file
            $file_name4 = $file->getClientOriginalName();
            // upload image
            $file->move(base_path('public/img/product'),$file_name4);
            DB::Table('products')->where('id',$request->id)->update(['image4'=>$file_name4]);
        }
        DB::Table('products')->where('id',$request->id)->update(['name'=>$request->name,
        'type_id'=>$request->type,
        'price'=>$request->price,
        'description'=>$request->description,
        'infomation'=>$request->infomation,
        'weight'=>$request->weight,
        'sales'=>$request->sales,
        'featured'=>$request->featured]);
        return redirect()->route('admin.listproduct')->with('success','Edit Success');
    }
    function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.listproduct')->with('success', 'Delete Success');
    }
}

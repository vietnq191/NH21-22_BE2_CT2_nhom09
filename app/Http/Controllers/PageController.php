<?php

namespace App\Http\Controllers;

use App\Models\Protype;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    function contact()
    {
        //get all protype
        $protype = Protype::all();

        //return
        return view(
            'contact',
            [
                'getProtypes' => $protype,
            ]
        );
    }
    function about_us()
    {
        //get all protype
        $protype = Protype::all();


        //return
        return view(
            'about-us',
            [
                'getProtypes' => $protype,
            ]
        );
    }

    function view_account(Request $request){
        //get all protype
        $protype = Protype::all();
        
        if (Auth::check()) {
        $id = auth()->user()->id;
        $user = User::find($id);

            return view(
            'view-account',
            [
                'getProtypes' => $protype,
                'getUser' => $user,
            ]
        );
        }
        else {
            return view(
                'view-account',
                [
                    'getProtypes' => $protype,
                ]
            );
        }
    }

    function update_profile(Request $request){
        //get all protype
        $protype = Protype::all();
        
        if (Auth::check()) {
        $id = auth()->user()->id;
        $user = User::find($id);

            return view(
            'update-profile',
            [
                'getProtypes' => $protype,
                'getUser' => $user,
            ]
        );
        }
        else {
            return redirect()->route('index');
        }
    }

    function update(Request $request) {
            User::where('id',$request->id)->update(['name'=>$request->name, 'phone'=>$request->phone]);
            return redirect()->route('view-account')->with('success','Edit Success');
    }
}
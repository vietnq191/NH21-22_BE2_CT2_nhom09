<?php

namespace App\Http\Controllers;

use App\Models\Protype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}

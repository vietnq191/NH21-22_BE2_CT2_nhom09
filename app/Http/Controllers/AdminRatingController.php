<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class AdminRatingController extends Controller
{
    function index() {
        $ratings = Rating::paginate(10);
        return view('admin-rating', [
            'ratings' => $ratings,
        ]);
    }

    function destroy(Request $request) {
        $getRow = Rating::find($request->id)->delete();

        if ($getRow == 0) {
            return redirect()->route('admin-view-rating')->with('unsuccess', 'Delete Unsuccess');
        }

        return redirect()->route('admin-view-rating')->with('success', 'Delete Success');
    }
}

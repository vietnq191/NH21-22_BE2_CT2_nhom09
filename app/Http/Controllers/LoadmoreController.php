<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Protype;
class LoadmoreController extends Controller
{
    function load_data(Request $request)
    {
    if ($request->ajax()){
        if($request->id>0){
            $data = Product::orderBy('id', 'desc')->where('id','<',$request->id)->take(15)->get();
        }
        else
        {
         $data =Product::orderBy('id', 'desc')->take(15)->get();
        }
        $output='';
        $last_id='';
        if(!$data->isEmty()){
            foreach($data as $row){
                $output .= '
                <?php
                $img = "/img/product/" . '.$row->image1.';
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{URL::asset($img)}}">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?php echo '.$row['name'].' ?></a></h6>
                            <h5>$<?php echo number_format('.$row['price'].')  ?></h5>
                        </div>
                    </div>
                </div>
                ';
                $last_id= $row->id;
            }
            $output .='
            <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="'.$last_id.'" id="load_more_button">Load More</button>
       </div>
            ';
        } else
      {
       $output .= '
       <div id="load_more">
        <button type="button" name="load_more_button" class="btn btn-info form-control">No Data Found</button>
       </div>
       ';
      }
      echo $output;
    }
    //
}
}

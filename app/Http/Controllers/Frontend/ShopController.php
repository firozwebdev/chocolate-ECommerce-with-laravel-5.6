<?php

namespace App\Http\Controllers\Frontend;
use App\Eproduct;
use App\Http\Requests;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function shop_home(){  //shop box view

        $products = Eproduct::paginate(12);
       
        return view('front.ecommerce.shop.pages.shop_box_view')
                            ->with('products',$products);
    }
    public function shop_list(){  //shop_list_view

        $products = Eproduct::paginate(10);
        return view('front.ecommerce.shop.pages.shop_list_view')
                            ->with('products',$products);
    }
}

<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class BackendController extends Controller
{
    public function __construct() {

      // return "hello wrold";
       
        $admin_id = Session::get('admin_id');
       
       
       
        if(! $admin_id)
        {
            return redirect()->route('admin.login')->send();
        }else{
            return Redirect::to('/dashboard')->send();
        }

    }
}

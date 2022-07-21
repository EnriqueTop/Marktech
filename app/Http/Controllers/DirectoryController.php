<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\Add;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\DB;

class DirectoryController extends Controller
{

    public function directory(Request $request)
    {
        $productsInSession = $request->session();
            $userId = Auth::user()->getId();
            $address = new Order();

            //get all addresses
            $address = DB::table('address')->where('user_id','=', $userId)->get(); // get the address id of the user


            return view('myaccount.address')->with("address", $address);
    }
}

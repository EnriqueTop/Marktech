<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
    public function orders()
    {
        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] =  "Mis pedidos";
        $viewData["orders"] = Order::latest()->with(['items.product'])->where('user_id', Auth::user()->getId())->get();
        return view('myaccount.orders')->with("viewData", $viewData);
    }

    //get current user
    public function getUser()
    {
        $user = Auth::User()->name;

        $viewData = [];
        $viewData["title"] = "Marktech";
        $viewData["subtitle"] =  "Mi cuenta";
        $viewData["user"] = $user;
        return view('myaccount.my')->with("viewData", $viewData);
    }

    // public function edit($id)
    // {
    //     $viewData = [];
    //     $viewData["title"] = "Marktech";
    //     $viewData["subtitle"] =  "Mi cuenta";
    //     $viewData["product"] = Auth::User()->getId($id);
    //     return view('myaccount.edit')->with("viewData", $viewData);
    // }

    // public function update(Request $request, $id)
    // {
    //     User::validate($request);

    //     $User = User::findOrFail($id);
    //     $User->setName($request->input('name'));
    //     $User->setEmail($request->input('email'));
    //     $User->setPassword($request->input('password'));
    //     $User->setRole($request->input('role'));
    //     // $User->setBalance($request=0);

    //     // if ($request->hasFile('image')) {
    //     //     $imageName = $product->getId() . "." . $request->file('image')->extension();
    //     //     Storage::disk('public')->put(
    //     //         $imageName,
    //     //         file_get_contents($request->file('image')->getRealPath())
    //     //     );
    //     //     $product->setImage($imageName);
    //     // }

    //     $User->save();
    //     return redirect()->route('myaccount.my');
    // }

}

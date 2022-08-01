<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function payment($id)
    {
        $userId = Auth::user()->getId();
        $data = Order::all();
        // get the last order id
        $order = collect($data)->where('id', '=', $id)->last();
        $order->setUserId($userId);

        $order->save();

        // set the state of the order 1=paid 0/null=not paid
        $order->paid = 'Pagado';
        $order->save();

        Auth::user()->save();

        $viewData['order'] = $order;

        toastr()->info('Pago Completado', ' ');

        return redirect()->route('myaccount.orders');
    }
}

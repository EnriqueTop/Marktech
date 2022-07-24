<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        try {

            $response = $this->gateway->purchase(array(

                // get amount from the last record in the total column from orders table
                'amount' => DB::table('orders')->pluck('total')->last(),
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error'),
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }

        } catch (\Throwable$th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];

                $payment->save();

                //address/purchase controller

                // $productsInSession = $request->session()->get("products");
                // if ($productsInSession) {
                $userId = Auth::user()->getId();
                $data = Order::all();
                // get the last order id
                $order = collect($data)->last();
                $order->setUserId($userId);

                $order->save();

                // set the state of the order 1=paid 0/null=not paid
                $order->paid = 'Pagado';
                $order->save();

                Auth::user()->save();

                $request->session()->forget('products');

                $viewData = [];
                $viewData["title"] = "Marktech - Comprar";
                $viewData["subtitle"] = "Estado del Pedido";
                $viewData["order"] = $order;

                return view('cart.postpurchase')->with("viewData", $viewData);

                // } else {
                //     return redirect()->route('cart.purchase');
                // }

                //address/purchase controller/end

                //return "Payment is Successfull. Your Transaction Id is : " . $arr['id'] . " and Payer Id is : " . $arr['payer']['payer_info']['payer_id'];

            } else {
                return $response->getMessage();
            }
        } else {
            return '¡Pago declinado!';
        }
    }

    public function error()
    {
        return '¡El usuario denegó el pago!';
    }

}

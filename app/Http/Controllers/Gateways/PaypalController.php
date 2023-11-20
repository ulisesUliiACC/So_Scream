<?php

namespace App\Http\Controllers\Gateways;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Http\Controllers\Carrito\CarritoController;
use Illuminate\Support\Facades\Log;

class PaypalController extends Controller
{
  //

  public function payment(Request $request)
  {
    $carritoController = new CarritoController();
    $cartTotal = $carritoController->getTotal();
    //$cartTotal = $this->calculateTotal($request);



    $provider = new PayPalClient;
    $provider->setApiCredentials(config('paypal'));
    $paypalToken = $provider->getAccessToken();

    $response = $provider->createOrder([
      "intent" => "CAPTURE",
      "application_context" => [
        "return_url" => route('paypal.success'),
        "cancel_url" => route('paypal.cancel'),
      ],
      "purchase_units" => [
        [
          "amount" => [
            "currency_code" => "MXN",
            "value" => $cartTotal
          ]
        ]
      ]
    ]);
    //dd($response);

    if (isset($response['id']) && $response['id'] != null) {

      foreach ($response['links'] as $link) {
        if ($link['rel'] == 'approve') {
          return redirect()->away($link['href']);
        }
      }
    } else {
      return redirect()->route('paypal.cancel');
    }

  }
  public function success(Request $request)
  {
      try {
          // captura de errores y array de datos para ver si llegan correctamente
          //dd($request->all());

          $provider = new PayPalClient;
          $provider->setApiCredentials(config('paypal'));
          $paypalToken = $provider->getAccessToken();


          $orderId = $request->input('orderID');

          $response = $provider->capturePaymentOrder($request->token);

          if (isset($response['status']) && $response['status'] == 'COMPLETED') {
//              return 'Paid Successfully!';
          return view('compra.success');


          } else {
              return redirect()->route('paypal.cancel')->with('error', 'Payment capture failed.');
          }
      } catch (\Exception $e) {
          Log::error('Exception in PayPal capture: ' . $e->getMessage());
          return redirect()->route('paypal.cancel')->with('error', 'An error occurred during payment capture.');
      }
  }





  public function cancel()
  {
    return 'pago cancelado';
  }
}

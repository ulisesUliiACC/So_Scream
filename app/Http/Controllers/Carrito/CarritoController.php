<?php

namespace App\Http\Controllers\Carrito;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Pedido;
use Gloudemans\Shoppingcart\Facades\Cart;
use Gloudemans\Shoppingcart\Contracts\Calculator;

class CarritoController extends Controller
{


  public function carrito()
  {
    return view('shop.cart.carrito');
  }
  public function index()
  {

    $productos = Producto::where('estado', true)->get();
    $products = Producto::all();
    return view('shop.shop', compact('productos', 'products', ));
  }

  public function addToCart($id)
  {
      $producto = Producto::findOrFail($id);

      if (auth()->check()) {
          // Si el usuario está autenticado, usa el carrito gestionado por el paquete
          Cart::add([
              'id' => $producto->id,
              'name' => $producto->nombre_producto,
              'price' => $producto->precio,
              'weight' => 0,
              'qty' => 1,
              'options' => [
                  'imagen' => $producto->imagen,
              ]
          ]);

          // Obtén el contenido actual del carrito y guárdalo en la sesión
          $cartItems = Cart::content()->toArray();
          session(['cart_items' => $cartItems]);
      }

      $response = [
          'message' => 'Producto agregado al carrito con éxito.'
      ];

      return response()->json($response);
  }






  public function qtyIncrement($id)
  {

    $producto = Cart::get($id);
    $updateQty = $producto->qty + 1;
    //dd($updateQty);
    Cart::update($id, $updateQty);

    return redirect()->back();
  }

  public function qtyDecrement($id)
  {
    $producto = Cart::get($id);
    $updateQty = $producto->qty - 1;
    if ($updateQty > 0) {
      Cart::update($id, $updateQty);
    }

    return redirect()->back();

  }

  public function removeProduct($id)
  {
    Cart::remove($id);
    return redirect()->back();
  }


  public function getTotal()
  {

    $total = 0;
    foreach (Cart::content() as $item) {
      $total += $item->qty * $item->price;
    }
    return $total;
  }

  //forulario de datos de envio del cliente
  public function completarCompra(Request $request)
  {
    $pedido = new Pedido();
    // Obtén los datos del formulario de envío
    $nombre = $request->input('nombre');
    $emaile = $request->input('email');
    $address = $request->input('address');
    $phone=$request->input('phone');



  }


}




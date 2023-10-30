<?php

namespace App\Http\Controllers\Carrito;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Pedido;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;



class CarritoController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth'); // Aplica middleware de autenticación a todos los métodos del controlador
  }
  public function index()
  {

    $productos = Producto::where('estado', true)->get();
    return view('shop.shop', compact('productos'));

  }
// Controlador para gestionar el carrito
public function carrito()
{
    if (Auth::check()) {
        // Usuario autenticado
        $cart = Cart::instance('user_' . Auth::user()->id);
        $cartItems = $cart->content();
    } else {
        // Usuario no autenticado
        $cartItems = session()->get('cart', []);
    }

    return view('shop.cart.carrito', compact('cartItems'));
}

public function addToCart(Request $request, $productId)
{
    // Obtén los detalles del producto desde la base de datos
    $producto = Producto::find($productId);

    if (!$producto) {
        return redirect()->route('shop.shop')->with('error', 'Producto no encontrado');
    }

    // Verifica si el usuario está autenticado
    if (Auth::check()) {
        // Usuario autenticado
        $cart = Cart::instance('user_' . Auth::user()->id);
    } else {
        // Usuario no autenticado
        $cart = session()->get('cart', []);
    }

    // Agregar productos al carrito
    $cart->add([
        'id' => $producto->id,
        'name' => $producto->nombre_producto,
        'price' => $producto->precio,
        'weight' => 0,
        'qty' => 1,
        'options' => [
            'imagen' => $producto->imagen,
        ],
    ]);

    if (Auth::check()) {
        // Si el usuario está autenticado, guarda el carrito en la base de datos
        $cart->store('user_' . Auth::user()->id);
    } else {
        // Si el usuario no está autenticado, guarda el carrito en la sesión
        session()->put('cart', $cart->content());
    }

    return redirect()->route('shop.shop')->with('success', 'Producto agregado al carrito');
}

public function qtyIncrement($rowId)
{
    $cart = Cart::instance('user_' . Auth::user()->id);
    $producto = $cart->get($rowId);

    if ($producto) {
        $updateQty = $producto->qty + 1;
        $cart->update($rowId, $updateQty);
    }

    return redirect()->back();
}

public function qtyDecrement($rowId)
{
    $cart = Cart::instance('user_' . Auth::user()->id);
    $producto = $cart->get($rowId);

    if ($producto) {
        $updateQty = $producto->qty - 1;
        if ($updateQty > 0) {
            $cart->update($rowId, $updateQty);
        }
    }

    return redirect()->back();
}

public function removeProduct($rowId)
{
    $cart = Cart::instance('user_' . Auth::user()->id);
    $cart->remove($rowId);
    $cart->store('user_' . Auth::user()->id); // Guardar cambios en la base de datos

    return redirect()->back();
}

  //
//  public function getTotal()
//  {
//
//    $total = 0;
//    foreach (Cart::content() as $item) {
//      $total += $item->qty * $item->price;
//    }
//    return $total;
//  }

  //forulario de datos de envio del cliente
  public function completarCompra(Request $request)
  {
    $pedido = new Pedido();
    // Obtén los datos del formulario de envío
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    $telefono = $request->input('telefono');
    $direccion = $request->input('direccion');
    $referencias = $request->input('referencias');
    $codigoPostal = $request->input('codigoPostal');
    $estado = $request->input('estado');
    $ciudad = $request->input('ciudad');

    // Crea un nuevo registro de pedido en la base de datos
    $pedido = Pedido::create([
      'usuario_id' => auth()->user()->id,
      // Si los usuarios están autenticados
      'fecha_pedido' => now(),
      // Puedes ajustar la fecha y hora según tus necesidades
      'estado' => 'pendiente',
      // O el estado deseado
      'direccion_envio' => $direccion,
      'direccion_facturacion' => '',
      // Puedes completar esto según tu lógica
      'metodo_pago' => 'PayPal',
      // O el método de pago utilizado
      'monto_total' => 0,
      // Puedes ajustar esto después de calcular el monto total
      // Otros campos según tus necesidades
    ]);

    // Una vez que tengas el ID del pedido, puedes asociar los productos al pedido
    // y realizar el cálculo del monto total, entre otras cosas.

    // Finalmente, redirige al cliente a la pasarela de pago de PayPal
    return redirect()->route('paypal.checkout'); // Ajusta la ruta según tu aplicación
  }


}




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
  public function carrito()
{
    // Verificar si el usuario está autenticado
    if (Auth::check()) {
        // Obtener el identificador del usuario autenticado
        $userId = Auth::user()->id;
        $cartIdentifier = 'user_' . $userId;

        // Utilizar el carrito del usuario
        Cart::instance($cartIdentifier);

        // Obtener los elementos del carrito
        $cartItems = Cart::content();

        return view('shop.cart.carrito', compact('cartItems'));
    }

    // Si el usuario no está autenticado, puedes redirigirlo a la página de inicio de sesión
    return redirect('/login')->with('error', 'Debes iniciar sesión para ver tu carrito de compras.');
}

  public function index()
  {

    $productos = Producto::where('estado', true)->get();
    $products = Producto::all();
    return view('shop.shop', compact('productos', 'products', ));
  }






  public function addToCart($id)
  {
      // Verificar si el usuario está autenticado
      if (Auth::check()) {
          $producto = Producto::findOrFail($id);

          // Obtener el identificador del usuario autenticado
          $userId = Auth::user()->id;
          $cartIdentifier = 'user_' . $userId;

          // Utilizar el carrito del usuario
          Cart::instance($cartIdentifier);

          // Verificar si el carrito ya está almacenado en la base de datos
          $cartStored = Cart::content()->count() > 0;

          if ($cartStored) {
              // Si el carrito ya está almacenado, restaura su contenido
              Cart::restore($cartIdentifier);
          }

          // Verificar si el producto ya está en el carrito
          $existingItem = Cart::search(function ($cartItem, $rowId) use ($id) {
              return $cartItem->id == $id;
          });

          if ($existingItem->isNotEmpty()) {
              // Si el producto ya está en el carrito, aumentar la cantidad
              $cartItem = $existingItem->first();
              Cart::update($cartItem->rowId, $cartItem->qty + 1);
          } else {
              // Agregar el producto al carrito
              Cart::add([
                  'id' => $producto->id,
                  'name' => $producto->nombre_producto,
                  'price' => $producto->precio,
                  'qty' => 1,
                  'weight' => 0,
                  'options' => [
                      'imagen' => $producto->imagen,
                  ]
              ]);
          }

          // Guardar el carrito en la base de datos con el identificador del usuario
          Cart::store($cartIdentifier);

          // Puedes regresar una respuesta JSON u otra vista según tus necesidades
          return response()->json(['message' => 'Producto agregado al carrito con éxito.']);
      } else {
          // Si el usuario no está autenticado, envía un mensaje de error y código de respuesta 401 (No autorizado)
          return response()->json(['message' => 'Debes iniciar sesión para agregar productos al carrito.'], 401);
      }
  }


  public function mostrarCarrito()
{
    // Verificar si el usuario está autenticado
    if (Auth::check()) {
        // Obtener el identificador del usuario autenticado
        $userId = Auth::user()->id;
        $cartIdentifier = 'user_' . $userId;

        // Utilizar el carrito del usuario
        Cart::instance($cartIdentifier);

        // Verificar si el carrito ya está almacenado en la base de datos y restaurarlo si es necesario
        if (Cart::stored($cartIdentifier)) {
            Cart::restore($cartIdentifier);
        }

        // Obtener los elementos del carrito
        $items = Cart::content();

        return view('carrito', compact('items'));
    } else {
        // Si el usuario no está autenticado, puedes redirigirlo a una página de inicio de sesión o mostrar un mensaje de que deben iniciar sesión.
        return redirect()->route('login');
    }
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




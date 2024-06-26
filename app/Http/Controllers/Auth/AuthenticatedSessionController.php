<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Gloudemans\Shoppingcart\Facades\Cart;
class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
{
    $request->authenticate();

    // Restaurar el carrito del usuario
    if (Auth::check()) {
        $user = Auth::user();
        $userId = $user->id;
        $cartIdentifier = 'user_' . $userId;

        // Utiliza el carrito del usuario
        Cart::instance($cartIdentifier);

        // Restaura el carrito si está almacenado en la base de datos
        Cart::restore($cartIdentifier);
    }

    $request->session()->regenerate();

    return redirect()->intended(RouteServiceProvider::HOME);
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        //Cart::store('username');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

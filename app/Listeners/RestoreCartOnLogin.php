<?php

namespace App\Listeners;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RestoreCartOnLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(Login $event)
{
    \Log::info('Usuario inició sesión: ' . $event->user->name);

    $user = $event->user;
    $cartIdentifier = 'user_' . $user->id;



    // Restaurar el carrito
    Cart::restore($cartIdentifier);
}



}

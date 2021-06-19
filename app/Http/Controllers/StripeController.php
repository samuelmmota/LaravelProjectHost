<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AnunciosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Stripe;
use Session;
use App\Models\anuncios;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet(request $anuncios)
    {
        //  dd($anuncios->id_anuncio);
        return view('layouts.pagamentos', [
            'id_anuncio' => $anuncios->id_anuncio,
        ]);
    }

    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {
        //dd($request->id_anuncio);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => 100 * 15,
            "currency" => "eur",
            "source" => $request->stripeToken,
            "description" => "Making test payment.",
        ]);

        $anuncios = anuncios::where('id_anuncio', '=', $request->id_anuncio)->get();
        // dd($anuncios);
        if (count($anuncios) == 1)
            foreach ($anuncios as $anuncio) {
                $anuncio->destacado = 1;
                $anuncio->save();
                break;
            }


        Session::flash('success', 'Payment has been successfully processed.');


        return redirect('/dashboard')->with('Payment has been successfully processed.');

        // return view('Utilizadores.utilizadorDash');
        //return back();
    }
}

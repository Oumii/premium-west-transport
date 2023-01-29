<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Forfait;
use App\Mail\ReservMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        $forfaits = Forfait::all();
        $forf = Forfait::get();
        return view('reservations')->with('reservations', $reservations)->with('forfaits', $forfaits)->with('forf', $forf);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'prestation' => 'required',
            'addressdepart' => 'required',
            'addressdestin' => 'required',
            'date' => 'required',
            'heure' => 'required',
            'passagers' => 'required',
            'bagages' => 'required',
            //'promo' => 'required',
            'nomfacture' => 'required',
            'sex' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            //'comment' => 'required',
            'gamme' => 'required',
            'prix' => 'required',
        ]);

        //dd($request->all());

        $contact = Reservation::create([
            'prestation' => $request->prestation,
            'addressdepart' => $request->addressdepart,
            'addressdestin' => $request->addressdestin,
            'date' => $request->date,
            'heure' => $request->heure,
            'passagers' => $request->passagers,
            'bagages' => $request->bagages,
            'promo' => $request->promo,
            'nomfacture' => $request->nomfacture,
            'sex' => $request->sex,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'phone' => $request->phone,
            'email' => $request->email,
            'comment' => $request->comment ?? 'sans commentaire',
            'gamme' => $request->gamme,
            'prix' => $request->prix
        ]);

        $data = array(
            'prestation' => $request->prestation,
            'addressdepart' => $request->addressdepart,
            'addressdestin' => $request->addressdestin,
            'date' => $request->date,
            'heure' => $request->heure,
            'passagers' => $request->passagers,
            'bagages' => $request->bagages,
            'promo' => $request->promo,
            'nomfacture' => $request->nomfacture,
            'sex' => $request->sex,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'phone' => $request->phone,
            'email' => $request->email,
            'comment' => $request->comment ?? 'sans commentaire',
            'gamme' => $request->gamme,
            'prix' => $request->prix
        );

        Mail::to('test_1@example.com')->send(new ReservMail($data));

        return view('confirmed');
    }


    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}

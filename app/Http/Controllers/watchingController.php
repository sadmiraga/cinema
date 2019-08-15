<?php

namespace App\Http\Controllers;

use App\watching;
use Illuminate\Http\Request;

class watchingController extends Controller
{
    //Add watching of the movie
    public function addWatching(Request $request)
    {

        $watching = new watching();
        $watching->ticketPrice = $request->input('price');

        $watching->watchingTimestamp = \Carbon\Carbon::parse($request->input('dateAndTime'));
        $watching->movie_id = $request->input('movie_id');

        $watching->save();
        return redirect()->back()->with('successMessage', 'Uspiješno ste dodali film na raspored za gledanje');
    }
}

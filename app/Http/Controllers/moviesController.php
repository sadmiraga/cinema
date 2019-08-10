<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;

class moviesController extends Controller
{
    public function add()
    {
        return view('admin.addMovie');
    }

    public function addMovieExe(Request $request)
    {

        //to do: samo ako je prijavljen da moze submitat filmove

        $movie = new movies;
        $movie->movieName = $request->input('imeFilma');
        $movie->movieDuration = $request->input('trajanjeFilma');
        $movie->description = $request->input('opisFilma');
        $movie->trailer = $request->input('trailerFilma');

        //PICTURE, move to folder and get name of picture
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $imageName);

        $movie->picture = $imageName;

        //sacuvaj podatke
        $movie->save();

        return redirect()->back();
    }
}

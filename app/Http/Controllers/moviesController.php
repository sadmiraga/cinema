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

    //dodaj novi film
    public function addMovieExe(Request $request)
    {

        //to do: samo ako je prijavljen da moze submitat filmove

        $movie = new movies;
        $movie->movieName = $request->input('imeFilma');
        $movie->movieDuration = $request->input('trajanjeFilma');
        $movie->description = $request->input('opisFilma');
        $movie->over18 = $request->input('over18');

        //TRAILER
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

    //prikazi sve filmove
    public function showMovies()
    {
        $movies = movies::all();

        return view('movies')->with('movies', $movies);
    }

    //izbrisi film
    public function deleteMovie($movie_id)
    {
        //provjeriti da li je admin u pitanju
        //provjeriti da li se brise film koji je vec zakazan da se prikazuje

        //provjeriti da li taj film postoji
        $movieExistCount = movies::where('id', $movie_id)->get();

        if (count($movieExistCount) == 0) {
            return redirect()->back();
        }

        //izbrisati film
        $movie = movies::findOrFail($movie_id);
        $movie->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movies;
use App\watching;
use Illuminate\Support\Facades\Auth;

class moviesController extends Controller
{
    public function index()
    {
        //get all watchings
        $watchings = watching::all();

        return view('homePage')->with('watchings', $watchings);
    }

    public function add()
    {
        if (Auth::guest()) {
            return view('error');
        } else {
            $user = Auth::user();
            if ($user->role == 1) {
                return view('admin.addMovie');
            } else {
                return view('error');
            }
        }
    }

    //ADD NEW MOVIE
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

        return redirect()->back()->with('SuccessMessage', 'Uspijesno ste dodali novi film u kolekciju');
    }

    //SHOW ALL MOVIES
    public function showMovies()
    {
        //check if user is logged in
        if (Auth::guest()) {
            return view('error');
        } else {
            //check if logged user is admin
            $user = Auth::user();
            if ($user->role == 1) {
                $movies = movies::all();
                return view('admin.movies')->with('movies', $movies);
            } else {
                return view('error');
            }
        }
    }

    //DELETE MOVIE
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

    //add to Schedule
    public function addToSchedule($movie_id)
    {
        return view('admin.addToSchedule')->with('movie_id', $movie_id);
    }
}

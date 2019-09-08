@extends('layouts.app')

@section('content')

<div id="successMessages">
    @if(isset($successMessage))
        {{$successMessage}}
    @endif
</div>

<?php
    //get name of movie
    $movie = App\movies::find($movie_id);
    $ImeFilma = $movie->movieName;
?>

<div class="title">
    <h3> Dodaj "{{$ImeFilma}}" na raspored za gledanje </h3>
</div>

<div class="addMovieForm">

    {!! Form::open(['url'=>'dodajGledanjeExe', 'method'=>'post', ]) !!}

        <!-- DATUM -->
            <label> <strong> Unesite datum i vrijeme izvođenja filma: </strong> </label> <br>
            <input class="addMovieInput" type="datetime-local"
                name="dateAndTime"
                required = "required"
                    > <br> <br>

        <!-- PRICE of TICKET -->
            <label> <strong>  Unesite cijenu karte za film </strong> </label> <br>
            <input class="addMovieInput" name="price" type="number" required = "required" step="0.1" >

            <label>
                <strong>
                    KM
                </strong>
            </label>

        <!-- MOVIE ID -->
            <input type="hidden" name="movie_id" value ={{$movie_id}}> <br>

        <!-- SUBMIT -->
            <input class="dugme" type="Submit" value="Dodaj">

    {!! Form::close() !!}

</div>

@endsection

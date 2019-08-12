

@if(count($movies)>0)

    @foreach($movies as $movie)


        <strong>
        {{$movie->movieName}} <br>
        </strong>

        <!-- Duration -->
        <label> Trajanje: </label>
        {{$movie->movieDuration}} <label> min </label>
        <br>

        <!-- TRAILER -->
        <a href="{{$movie->trailer}}"> Trailer </a> <br>

        <!-- description -->
        <label> Opis: </label> <br>
        {{$movie->description}} <br>

        <!-- AGE RESTRICTION -->
        @if($movie->over18 == 0)
            {{'Ovaj film je prikladan za sve uzraste'}}
        @else
            {{'Ovaj film nije preporucen za osobe mladje od 18 godina'}}
        @endif

        <br>
        <button onclick="location.href='/izbrisiFilm/{{$movie->id}}';"> izbrisi </button>



    <br> <br> <hr>
    @endforeach


@else
<p> Nema filmova na raspolaganju za prikaz </p>
@endif

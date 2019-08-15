
<div id="successMessages">
    @if(isset($successMessage))
        {{$successMessage}}
    @endif
</div>


{!! Form::open(['url'=>'dodajGledanjeExe', 'method'=>'post', ]) !!}

    <!-- DATUM -->
        <label> Unesite datum i vrijeme izvođenja filma: </label> <br>
        <input type="datetime-local"
               name="dateAndTime"
               required = "required"
                > <br> <br>

    <!-- PRICE of TICKET -->
        <label>  Unesite cijenu karte za film </label>
        <input name="price" type="number" required = "required" step="0.1" >

        <label>
            KM
        </label>

    <!-- MOVIE ID -->
        <input type="hidden" name="movie_id" value ={{$movie_id}}> <br>

    <!-- SUBMIT -->
        <input type="Submit" value="Dodaj">

{!! Form::close() !!}


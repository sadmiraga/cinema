@extends('layouts.app')

@section('content')

<div class="title">
<h3> Dodaj Film </h3>
</div>

<div class="uSredini">
    <div id="notification">
        <!-- Message about success -->
        @if(Session::has('SuccessMessage'))
            <div id="hideMe" class="alert alert-success">
                {{Session::pull('SuccessMessage')}}
            </div>
        @endif
    </div>
</div>

<div id="addMovieContainer">
<br> <br>


{!! Form::open(['url'=>'dodajFilmExe', 'method'=> 'post', 'enctype'=> 'multipart/form-data']) !!}
@csrf


<!-- IME FILMA -->
{{ Form::text('imeFilma', '', ['class' => 'form-control','placeholder'=> 'Upišite ime filma' , 'required'=> 'required' ])}}
<br>

<!-- trajanje filma -->
{{ Form::number('trajanjeFilma', '', ['class'=> 'form-control', 'placeholder'=> 'trajanje filma u MIN', 'required'=> 'required'])}}
<br>

<!-- Opis filma -->
{{ Form::textarea( 'opisFilma', '', ['class'=>'form-control', 'placeholder'=>'Kratak opis filma', 'rows'=>'5', 'cols' => '20' ])}}
<br>

<!-- Trailer -->
{{ Form::text( 'trailerFilma', '', ['class'=> 'form-control' , 'placeholder'=> 'link trailera filma', 'required'=> 'required' ])}}
<br>




<!-- Da li je za odrasle -->
<div id="age">
    <div id="punoljetniContainer">
        {{ Form::radio('over18', '1', false, array('id'=>'punoljetni'))}}
        <label class="radioLabel" for="punoljetni"> Za starije od 18 godina </label>
    </div>

    <div id="zaSveContainer">
    {{ Form::radio('over18', '0', true, array('id'=>'zaSve'))}}
    <label class="radioLabel" for="zaSve"> Za sve uzraste </label>
    </div>

</div>


<br>


<!-- Baner -->
<label> Baner filma </label> <br>
<input type="file" name="image" id="image" required="required">
<br>
<br>




{{Form::submit('Dodaj',['class'=>'btn btn-secondary'])}}

{!! Form::close() !!}

</div>




@endsection

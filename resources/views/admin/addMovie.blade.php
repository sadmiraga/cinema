

<h1> Dodaj Film </h1>

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
{{ Form::radio('over18', '1', false)}}
<span> Za starije od 18 godina </span>

<br>

{{ Form::radio('over18', '0', true)}}
<span> Za sve uzraste </span>
<br> <br>

<!-- Baner -->
<label> Naslovnica filma </label> <br>
<input type="file" name="image" id="image" required="required">
<br> <br>

{{Form::submit('Dodaj',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}


<!-- Message about success -->
@if(Session::has('SuccessMessage'))
    <div class="alert alert-success">
        {{Session::get('SuccessMessage')}}
    </div>
@endif

<button id="dugme" class="btn btn-primary"> OK </button>

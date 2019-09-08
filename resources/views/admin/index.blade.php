@extends('layouts.app')


@section('content')

<div class="title">
   <h3> Admin Panel </h3>
</div>

<div id="container">

<div onclick="location.href='/filmovi';" id="left">
    <i class="fas fa-file-video"></i>
</div>

<div onclick="location.href='/dodajFilm';" id="right">
    <i class="far fa-plus-square"></i>
</div>


</div>


@endsection

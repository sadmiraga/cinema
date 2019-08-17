@extends('layouts.app')

@section('content')

    <p> Morate biti prijavljeni kao admin da bi pristupili ovoj stranici </p>

    <button onclick="location.href='/login';" class="btn btn-primary"> Prijava </button>

@endsection

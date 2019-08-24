@extends('layouts.app')

@section('content')



<h3> Rezultati za pretragu '{{ request()->input('query') }}' ({{count($searchResult)}}) </h3>


@foreach($searchResult as $watching )

{{$watching->movieName}} <br>
{{$watching->watchingTimestamp}}
<hr>




@endforeach





@endsection

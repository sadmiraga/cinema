@extends('layouts.app')


@section('content')

@if(count($movies)>0)

<div class="col-lg-12">
    <div class="row">



        @foreach($movies as $movie)


        <!-- pocetak Tabela -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">

                <!-- Movie Name -->
                <div class="card-body">
                    <h3 class="card-title" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                        {{$movie->movieName}}
                    </h3>
                </div>

                <!-- Main Part -->
                <div class="embed-responsive embed-responsive-16by9">

                    <!-- image -->
                        <div class="pic">
                            <img class="card-img-top embed-responsive-item" src="images\{{$movie->picture}}" alt="">
                        </div>


                    <!-- TRAILER -->
                    <div class="top-right">
                        <a style="color:red; text-decoration:none;"  href="{{$movie->trailer}}">
                            <i class="fab fa-youtube"></i> Trailer
                        </a> <br>
                    </div>

                    <!--over 18-->
                    @if($movie->over18 == 1)
                    <img class="top-left" width="8%" height="8%" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMyOC44NjMgMzI4Ljg2MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzI4Ljg2MyAzMjguODYzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPGcgaWQ9Il94MzRfNC0xOFBsdXNfbW92aWUiPgoJPGc+CgkJPHBhdGggZD0iTTEwNC4wMzIsMjIwLjQzNFYxMzEuMTVIODMuMzkyVjEwOC4yN2g0OS4xMjF2MTEyLjE2NEgxMDQuMDMyeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgoJPGc+CgkJPHBhdGggZD0iTTIzOS41NTIsMTM3LjIzYzAsOS43Ni01LjI4LDE4LjQtMTQuMDgsMjMuMjAxYzEyLjMxOSw1LjExOSwyMCwxNS44NCwyMCwyOC4zMmMwLDIwLjE2LTE3LjkyMSwzMi45NjEtNDUuOTIxLDMyLjk2MSAgICBjLTI4LjAwMSwwLTQ1LjkyMS0xMi42NDEtNDUuOTIxLTMyLjQ4YzAtMTIuODAxLDguMzItMjMuNjgyLDIxLjI4LTI4LjgwMWMtOS40NC01LjI4MS0xNS41Mi0xNC4yNC0xNS41Mi0yNCAgICBjMC0xNy45MjIsMTUuNjgxLTI5LjI4MSw0MC4wMDEtMjkuMjgxQzIyNC4wMzEsMTA3LjE1LDIzOS41NTIsMTE4LjgzLDIzOS41NTIsMTM3LjIzeiBNMTgwLjUxLDE4Ni4zNTIgICAgYzAsOS40NDEsNi43MjEsMTQuNzIxLDE5LjA0MSwxNC43MjFjMTIuMzIsMCwxOS4yLTUuMTE5LDE5LjItMTQuNzIxYzAtOS4yNzktNi44OC0xNC41NjEtMTkuMi0xNC41NjEgICAgQzE4Ny4yMywxNzEuNzkxLDE4MC41MSwxNzcuMDcyLDE4MC41MSwxODYuMzUyeiBNMTgzLjM5MSwxMzguODNjMCw4LjAwMiw1Ljc2LDEyLjQ4LDE2LjE2LDEyLjQ4YzEwLjQsMCwxNi4xNi00LjQ3OSwxNi4xNi0xMi40OCAgICBjMC04LjMxOC01Ljc2LTEyLjk1OS0xNi4xNi0xMi45NTlDMTg5LjE1LDEyNS44NzEsMTgzLjM5MSwxMzAuNTEyLDE4My4zOTEsMTM4LjgzeiIgZmlsbD0iIzAwMDAwMCIvPgoJPC9nPgoJPGc+CgkJPHBhdGggZD0iTTI5Mi44NjQsMTIwLjkzMmM0LjczNSwxMy45NzUsNy4xMzcsMjguNTkyLDcuMTM3LDQzLjVjMCw3NC43NTItNjAuODE2LDEzNS41NjgtMTM1LjU2OSwxMzUuNTY4ICAgIFMyOC44NjIsMjM5LjE4NCwyOC44NjIsMTY0LjQzMmMwLTc0Ljc1NCw2MC44MTYtMTM1LjU2OCwxMzUuNTY5LTEzNS41NjhjMTQuOTEsMCwyOS41MjcsMi40LDQzLjUsNy4xMzdWNS44MzIgICAgQzE5My44MTcsMS45NjMsMTc5LjI0LDAsMTY0LjQzMiwwQzczLjc2NSwwLDAuMDAxLDczLjc2NCwwLjAwMSwxNjQuNDMyczczLjc2NCwxNjQuNDMyLDE2NC40MzEsMTY0LjQzMiAgICBTMzI4Ljg2MiwyNTUuMSwzMjguODYyLDE2NC40MzJjMC0xNC44MDctMS45NjItMjkuMzg1LTUuODMxLTQzLjVIMjkyLjg2NHoiIGZpbGw9IiMwMDAwMDAiLz4KCTwvZz4KCTxnPgoJCTxwb2x5Z29uIHBvaW50cz0iMjg0LjY1OSw0NC4xMTEgMjg0LjY1OSwxMi41ODIgMjYxLjk4NywxMi41ODIgMjYxLjk4Nyw0NC4xMTEgMjMwLjY0Nyw0NC4xMTEgMjMwLjY0Nyw2Ni43ODEgMjYxLjk4Nyw2Ni43ODEgICAgIDI2MS45ODcsOTguMzA5IDI4NC42NTksOTguMzA5IDI4NC42NTksNjYuNzgxIDMxNi4xODYsNjYuNzgxIDMxNi4xODYsNDQuMTExICAgIiBmaWxsPSIjMDAwMDAwIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                    @endif

                </div>

                <!-- footer -->
                <div class="card-footer">



                    <!-- DURATION -->
                    <div style="text-align:center;">
                        <label> Trajanje: </label> {{$movie->movieDuration}} <label>min </label> <br>
                    </div>

                    <div id="deleteAndEditButtons">
                        <!-- Add movie to schedule -->
                        <button class="btn btn-secondary" onclick="location.href='/dodajGledanje/{{$movie->id}}';"> Dodaj na raspored </button>

                        <!-- Delete Movie -->
                        <button class="btn btn-secondary" onclick="location.href='/izbrisiFilm/{{$movie->id}}';"> izbrisi </button>
                    </div>

                    <!-- description -->
                    <div class="movieDescription">
                        <?php echo nl2br($movie->description) ?>
                    </div>

                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

@else
    <div class="uSredini">
        <p> Nema filmova na raspolaganju za prikaz </p>
    </div>
@endif


<!-- pages -->
<div class="d-flex">
    <div class="mx-auto">
        {{$movies->links()}}
    </div>
</div>


@endsection

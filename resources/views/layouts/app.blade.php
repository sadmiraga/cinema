<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- FONT for icons -->
    <script src="https://kit.fontawesome.com/bc163f6c73.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <!-- cinema name -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">



                <!-- ADMIN -->
                @auth
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('adminPanel') }}">Admin Panel <span class="sr-only">(current)</span></a>
                    </li>

                    <!-- logout-->
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" >
                            Logout <span class="sr-only">(current)</span></a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>

                @endauth


              </ul>

              <!-- SEARH FORM -->
                <form action="{{route('searh')}}" method="GET"  class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" value="{{ request()->input('query') }}" name="query" placeholder="Trazi">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Trazi</button>
              </form>

            </div>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- footer -->
    <footer class="footer">

        <!-- Instagram -->
        <a  class="footerLinks" href="https://www.instagram.com/sadmiraga_/">
            <i class="fab fa-instagram"></i>
        </a>

        <!-- Facebook -->
        <a  class="footerLinks" href="https://www.facebook.com/sadmir.hasanic.5">
            <i class="fab fa-facebook"></i>
        </a>

        <!-- Email -->
        <a  class="footerLinks" href="mailto:sadmirvela@gmail.com">
            <i class="fas fa-envelope"></i>
        </a>



        <!--Location -->
        <a class="footerLinks" href="https://www.google.com/maps/dir/Current+Location/46.362949, 15.124023">
                <i class="fas fa-location-arrow"></i>
        </a>

    </footer>
</body>
</html>

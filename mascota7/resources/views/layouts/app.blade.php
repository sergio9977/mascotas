<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('material-design/dist/css/bootstrap-material-design.min.css')}}">

    <link rel="stylesheet" href="{{asset('material-design/dist/css/ripples.min.css')}}">
    <!--<link rel="stylesheet" href="{{asset('MDB-Free/css/mdb.min.css')}}">-->


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false">
                                @if(Auth::user()->password == "")
                                     <img src="{{ Auth::user()->urlimage }}" class="img-circle" alt="" style='max-width: 35px'>
                                @else
                                     <img src="imgUser/{{ Auth::user()->urlimage }}" class="img-circle" alt="" style='max-width: 30px'>
                                @endif
                                    {{ Auth::user()->name }}
                                      <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
<!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-6">
                <h5 class="title">Pagina de adopcion</h5>
                <p>Somos una organizacion que se dedica ala adopcion y rescate de mascotas junto con muchas
                organizaciones que estan registradas en nuestra web</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">Links</h5>
                <ul>
                    <li><a href="#!">Link 1</a></li>
                    <li><a href="#!">Link 2</a></li>
                    <li><a href="#!">Link 3</a></li>
                    <li><a href="#!">Link 4</a></li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Redes Sociales</h5>
                <ul>
                    <li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                    <li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
                </ul>
            </div>
            <!--/.Second column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="http://www.google.com"> Mascotas.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
    <!-- Scripts -->
	<script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script>
	<script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('material-design/dist/js/material.min.js')}}"></script>
	<script src="{{asset('material-design/dist/js/ripples.min.js')}}"></script>
	<script src="{{asset('MDB-Free/js/mdb.min.js')}}"></script>
	<script>
		$.material.init();
	</script>
	
	@yield('scripts')

</body>
</html>
